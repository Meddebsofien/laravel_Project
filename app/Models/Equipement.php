<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    use HasFactory;

    protected $table = 'equipements';
    protected $fillable =['id','name'];


    public function Dependencies(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {
        return $this->belongsTo(EquipementDependencies::class);
    }

    public function description(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {
        return $this->belongsTo(EquipementDescription::class);
    }

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
