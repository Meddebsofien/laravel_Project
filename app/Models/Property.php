<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PropertyFees;
use App\Models\FeesProperty;
use App\Models\MyUserRole;
use Illuminate\Support\Str; // Facultatif, si vous avez besoin d'autres fonctions de Str

use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'properties';
    protected $fillable = ['property_attribute_id','property_address_id', 'external_id', 'photo_id'];


    // Définition du mutateur pour display_name
    public function setDisplayNameAttribute($value)
    {
        $this->attributes['display_name'] = $value ?: $this->name;
    }
    public function attribute(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(PropertyAttribute::class, 'id', 'property_attribute_id');
    }

    public function photo(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Photo::class, 'id', 'photo_id');
    }

    public function address(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(PropertyAddress::class, 'id', 'property_address_id');
    }


    // Définir la relation many-to-many
    public function partenaires()
    {
        return $this->belongsToMany(Partenaire::class, 'property_partenaire');
    }


    protected static function booted()
    {
        static::creating(function ($property) {
            do {
                // Génère une chaîne de 10 chiffres aléatoires
                $externalId = str_pad(mt_rand(0, 9999999999), 10, '0', STR_PAD_LEFT);
            } while (self::where('external_id', $externalId)->exists());
    
            $property->external_id = $externalId;
        });
    }

    /**
     * Récupère les taxes associées à cette propriété.
     */
    public function fees(): \Illuminate\Database\Eloquent\Relations\hasManyThrough
    {
        return $this->hasManyThrough(
            PropertyFees::class, // Modèle de destination
            FeesProperty::class, // Modèle intermédiaire
            'property_id', // Clé étrangère de Property dans FeesProperty
            'id', // Clé primaire de PropertyFees
            'id', // Clé primaire de Property
            'property_fees_id' // Clé étrangère de PropertyFees dans FeesProperty
        );
    }

    public function booking(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Booking::class,'property_id','id');
    }

    public function ical(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Booking::class,'property_id','id');
    }

    public function photos(): \Illuminate\Database\Eloquent\Relations\hasManyThrough
    {
        return $this->hasManyThrough(
            Photo::class,
            PropertyPhoto::class,
            'property_id',
            'id',
            'id',
            'photo_id',
        );
    }

    public function firstPhoto()
    {
        return $this->photos()->orderBy('order')->first();
    }

    public function pro_equipement(): \Illuminate\Database\Eloquent\Relations\hasManyThrough
    {
        return $this->hasManyThrough(
            PropertyEquipement::class, // Modèle de destination
            PropertyPropertyEquipement::class, // Modèle intermédiaire
            'property_id', // Clé étrangère de PropertyPropertyEquipement vers Property
            'id', // Clé primaire de Property
            'id', // Clé primaire de PropertyEquipement
            'property_equipement_id' // Clé étrangère de PropertyPropertyEquipement vers PropertyEquipement
        );
    }

    public function userRoles(): HasMany
    {
        return $this->hasMany(MyUserRole::class);
    }
}
