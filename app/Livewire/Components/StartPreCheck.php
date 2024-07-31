<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Session;
use App\Models\Booking;

class StartPreCheck extends Component
{
    public $back = 'sign-in';
    public $actuel = 'StartPreCheck';
    public $next = 'precheck';

    public $bookinginfo;

    public function mount()
    {
        $this->bookinginfo = $this->findBooking();
    }
    public function render()
    {

        return view('livewire.components.start-pre-check');
    }
    public function showComponent($component)
    {
        $this->activeComponent = $component;
    }
    public function findBooking()
    {

        return Booking::where('id', Session::get('booking_id'))->first();
    }

}
