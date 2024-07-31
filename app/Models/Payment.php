<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'namecard',
        'securitynum',
        'dateexp',
        'numcard'
    ];


    public function bookingGuest(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {
        return $this->belongsTo(BookingGuest::class);
    }


}
