<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth; // Importer la classe Auth

class MapsButton extends Component
{
    public $booking;

    public function mount() {
        $this->booking = Auth::guard('booking')->user();
        //dd($this->booking);
    }


    public function render()
    {
        return view('livewire.components.maps-button');
    }
}
