<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyEquipement extends Model
{
    use HasFactory;

    protected $table = 'property_equipements';
    protected $fillable =[
        'id',
        'equipement_description_id',
        'equipements_id',
        'equipement_availability_id',
        'property_equipements_parent_id',
        'private',
        'number',
        'order',
    ];


    public function description(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {
        return $this->belongsTo(EquipementDescription::class,'equipement_description_id');
    }

    public function photos(): \Illuminate\Database\Eloquent\Relations\hasManyThrough
    {
        return $this->hasManyThrough(
            Photo::class,
            PropertyEquipementPhoto::class,
            'property_equipement_id',
            'id',
            'id',
            'photo_id');
    }

    public function availability(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {
        return $this->belongsTo(EquipementAvailability::class,'equipement_availability_id');
    }
    public function equipement(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {
        return $this->belongsTo(Equipements::class,'equipements_id');
    }

    public function property(): \Illuminate\Database\Eloquent\Relations\hasManyThrough
    {
        return $this->hasManyThrough(
            Property::class, // Modèle de destination
            PropertyPropertyEquipement::class, // Modèle intermédiaire
            'property_equipement_id', // Clé étrangère de PropertyPropertyEquipement vers PropertyEquipement
            'id', // Clé primaire de Property
            'id', // Clé primaire de PropertyEquipement
            'property_id' // Clé étrangère de PropertyPropertyEquipement vers Property
        );
    }

}
