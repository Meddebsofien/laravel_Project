<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PropertyType extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'property_types';
    protected $fillable =['id','name'];
}
