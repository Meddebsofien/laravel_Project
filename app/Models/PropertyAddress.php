<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyAddress extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $table = 'property_addresses';
    protected $fillable = ['property_number','floor','building_number',
    'street', 'number', 'city','state','zip_code','country',
    'latitude', 'longitude'
    ]   ;


    public function property(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Property::class, 'property_address_id', 'id');
    }
}
