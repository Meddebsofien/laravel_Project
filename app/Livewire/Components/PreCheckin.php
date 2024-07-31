<?php

namespace App\Livewire\Components;

use App\Models\BookingGuest;
use App\Models\PropertyAddress;
use App\Models\PropertyAttribute;
use Livewire\Component;

use Illuminate\Support\Facades\Session;
use App\Models\Booking;

class PreCheckin extends Component
{
    public $back = 'StartPreCheck';
    public $actuel = 'precheck';
    public $next = 'form-identity';


    public $bookinginfo;
    public $bookingGuest;
    public $Property;
    public $PropertyAttribute;
    public function mount()
    {
        $this->bookinginfo = $this->findBooking();
        $this->bookingGuest = $this->findBookingGuest();
        $this->Property = $this->findPropertyAdress();
        $this->PropertyAttribute = $this->findPropertyAttribute();
        session(['Guest_id' => $this->bookingGuest]);
        session(['propertyAdd' => $this->Property]);
        session(['bookinginfo' => $this->bookinginfo]);
        session(['PropertyAttribute' => $this->PropertyAttribute]);
    }
    public function findBooking()
    {

        return Booking::where('id', Session::get('booking_id'))->first();
    }
    public function findBookingGuest()
    {

        return BookingGuest::where('id', $this->bookinginfo->booking_guest_id)->first();
    }

    public function findPropertyAdress()
    {
        return PropertyAddress::where('id', $this->bookinginfo->property_id)->first();
    }
    public function findPropertyAttribute()
    {
        return PropertyAttribute::where('id', $this->bookinginfo->property_id)->first();
    }
    public function render()
    {
        return view('livewire.components.pre-checkin');
    }


}
