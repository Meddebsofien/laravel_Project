<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class SignIn extends Component
{
    public $actuel;

    public $password;
    public $reservationNumber;
    public $result = '';
    public $remember = false;
    public $booking;

    protected $rules = [
        'password' => 'required|min:6|string',
    ];
    public function mount()
    {
        // session()->flush();
    }

    public function login()
    {
        $this->validate();

        // Rechercher l'utilisateur par mot de passe
        $booking = $this->findBooking();

        // Vérifier si l'utilisateur existe et si le mot de passe est correct
        if ($booking) {
            Auth::guard('booking')->login($booking, $this->remember);
            session(['booking_id' => $booking->id]);  // Stocker l'ID de la réservation dans la session

            // Émettre un événement pour indiquer que l'utilisateur est connecté
            //  $this->dispatch('userLoggedIn', user: $user->name);

            $this->result = "you logged in successfully";
            // $this->redirectRoute('welcome');
            $this->StartPreCheckIn();
        } else {
            $this->result = "Erreur";
            session()->flash('error', 'The provided password does not match our records.');
        }
    }

    public function findBooking()
    {
        return Booking::where('external_reservation_id', $this->password)->first();
    }
    public function render()
    {
        return view('livewire.components.sign-in');
    }
    public function StartPreCheckIn()
    {
        $this->dispatch('showComponent', 'StartPreCheck');

    }
    public function lostnumber()
    {
        $this->dispatch('showComponent', 'lostnumber');

    }




}
