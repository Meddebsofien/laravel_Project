<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAttribute extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'property_attributes';
    protected $fillable = ['display_name', 'name', 'description', 'summary', 'square_metre', 'time_zone', 'room_type', 'currency', 'maximum_capacity', 'bedrooms', 'beds', 'bathroom', 'pets', 'smoking', 'party', 'present', 'break_fast', 'surprise', 'created_at', 'updated_at'];

    public function setDisplayNameAttribute($value)
    {
        $this->attributes['display_name'] = $value ?: $this->name;
    }

    public function property(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_attribute_id', 'id');
    }

}
