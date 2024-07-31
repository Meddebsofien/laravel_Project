<?php

namespace App\Livewire\Components;

use App\Models\PropertyAddress;
use Livewire\Component;
use App\Models\PropertyAttribute;
use Illuminate\Support\Facades\Auth; // Importer la classe Auth
use App\Models\Booking; // Importer le modèle Booking


class Navbar extends Component
{
    public $propertyname;
    public $propertyaddress;


    public $booking;
    public $verificationCode;
    public $activeComponent = 'access';
    protected $listeners = ['showComponent']; // Écouter les événements émis par d'autres composants Livewire


    //protected $listeners = ['userLoggedIn' => 'updateNavbar'];

    /* #[On('userLoggedIn')]
    public function updateNavbar( $user){
        //$this->user = $this->findUser();
        //$this->propertyname = PropertyAttributes::value('name');
        $this->user = $user;
    } */

    /* public function userLoggedIn(User $user)
    {
        $this->user = $user;
    } */

    public function mount()
    {

        $this->booking = Auth::guard('booking')->user();
        $this->propertyname = PropertyAttribute::value('name');
        $this->propertyaddress = PropertyAddress::value('city');

    }


    public function render()
    {
        return view('livewire.components.navbar');
    }
    public function showComponent($component)
    {
        $this->activeComponent = $component;
    }
}
