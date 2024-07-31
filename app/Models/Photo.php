<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Property;

class Photo extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'photos';
    protected $fillable =['url', 'order', 'description', 'tags'];

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'property_photos', 'photo_id', 'property_id');
    }
}
