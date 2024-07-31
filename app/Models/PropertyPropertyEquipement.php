<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyPropertyEquipement extends Model
{
    use HasFactory;
    protected $table = 'property_property_equipement';
    protected $fillable =['property_id', 'property_equipement_id'];

}
