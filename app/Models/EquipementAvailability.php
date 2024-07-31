<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipementAvailability extends Model
{
    use HasFactory;

    protected $table = 'equipement_availability';
    protected $fillable =['id','date_start','date_end','horaire_start','horaire_end'];

}
