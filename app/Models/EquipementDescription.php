<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipementDescription extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = 'equipement_descriptions';
    protected $fillable =['id','nickname', 'description', 'is_room','is_furniture','is_accesory'];


    public function equipement(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Equipements::class);
    }

}
