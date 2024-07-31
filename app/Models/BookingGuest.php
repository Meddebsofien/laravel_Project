<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingGuest extends Model
{
    use HasFactory;
    protected $table = 'booking_guests';
    protected $fillable = ['name', 'email', 'phone', 'picture'];

    public function booking(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    public function contact(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->HasOne(Contact::class, 'id', 'contact_id');
    }


    public function payment(): \Illuminate\Database\Eloquent\Relations\hasOne
    {
        return $this->hasOne(Payment::class, 'id', 'id_paiment');
    }
}
