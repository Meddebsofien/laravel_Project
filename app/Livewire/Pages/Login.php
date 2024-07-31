<?php

namespace App\Livewire\Pages;

use App\Models\Booking;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Login extends Component
{
    public $password;
    public $reservationNumber;
    public $result = '';
    public $remember = false;
    public $booking;

    protected $rules = [
        'password' => 'required|min:6|string',
    ];

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
            //$this->dispatch('userLoggedIn', user: $user->name);

            $this->result = "you logged in successfully";
            $this->redirectRoute('welcome');
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
        return view('livewire.pages.login', [
            'booking' => $this->booking,
        ]);
    }
}
