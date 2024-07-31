<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipementDependency extends Model
{
    use HasFactory;

    protected $table = 'equipement_dependencies';
    protected $fillable =['id','parent_id','enfant_id'];


    public function parent_id() : HasOne
    {
        return $this->hasOne(Equipements::class,'id','parent_id');
    }

    public function enfant_id() : HasOne
    {
        return $this->hasOne(Equipements::class,'id','enfant_id');
    }
}
