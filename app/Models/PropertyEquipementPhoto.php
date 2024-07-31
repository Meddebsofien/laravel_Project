<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyEquipementPhoto extends Model
{
    use HasFactory;
    protected $table = 'property_equipement_photos';
    protected $fillable =['property_equipement_id', 'photo_id'];

}
