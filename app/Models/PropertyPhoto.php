<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Property;
use App\Models\Photo;

class PropertyPhoto extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'property_photos';
    protected $fillable =['property_id', 'photo_id'];


    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }

}
