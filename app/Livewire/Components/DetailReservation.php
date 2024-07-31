<?php

namespace App\Livewire\Components;

use App\Models\Partenaire;
use Livewire\Component;

class DetailReservation extends Component
{

    public $guest;
    public $bookinginfo;
    public $PropertyAttribute;
    public $PropertyAddresse;
    public $partenaire;

    public function mount()
    {

        $this->guest = session('Guest_id', '');
        $this->bookinginfo = session('bookinginfo', '');
        $this->PropertyAttribute = session('PropertyAttribute', '');
        $this->PropertyAddresse = session('propertyAdd', '');
        $this->partenaire = $this->finpartenaire();


    }
    public function render()
    {
        return view('livewire.components.detail-reservation');
    }
    public function showFormadduser()
    {


        $this->dispatch('showComponent', 'form-adduser');
    }

    public function finpartenaire()
    {
        return Partenaire::where('id', $this->bookinginfo->partenaire_id)->first();
    }
}
