<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAvailability extends Model
{
    use HasFactory;

    protected $table = 'property_availabilities';
    protected $fillable =['id','date_start','date_end','horaire_start','horaire_end'];


    public function propertyEquipements(): \Illuminate\Database\Eloquent\Relations\belongsToMany
    {
        return $this->belongsToMany(PropertyEquipement::class);
    }

}
