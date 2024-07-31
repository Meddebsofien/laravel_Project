<?php

namespace App\Livewire\Components;

use App\Models\Booking;
use App\Models\BookingGuest;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Lostnumber extends Component
{
    public $arrivaldate;
    public $emailorphone;
    public $res;
    public $booking;
    public $guest;
    protected $rules = [
        'arrivaldate' => 'required',
        'emailorphone' => 'required',
    ];
    public function render()
    {
        return view('livewire.components.lostnumber');
    }
    public function showSignin()
    {
        $this->dispatch('showComponent', 'sign-in');


    }

    public function retrieveReservationNumber()
    {
        $this->validate();

        $this->booking = Booking::where('check_in', $this->arrivaldate)->first();
        if ($this->booking) {

            $this->guest = BookingGuest::where('id', $this->booking->booking_guest_id)->first();

            if ($this->guest->email == $this->emailorphone || $this->guest->phone == $this->emailorphone) {
                $this->res = $this->booking->external_reservation_id;
                $this->sendEmail($this->guest->email, $this->booking->external_reservation_id);
                session()->flash('message', 'Email with reservation number has been sent.');
            } else {
                $this->res = 'failed';
                session()->flash('error', 'No matching guest found for the provided email or phone number.');
            }
        } else {
            session()->flash('error', 'No booking found for the provided arrival date.');
        }
    }

    private function sendEmail($email, $reservationNumber)
    {
        Mail::send([], [], function ($message) use ($email, $reservationNumber) {
            $message->to($email)
                ->subject('Your Reservation Number')
                ->text("Your reservation number is: $reservationNumber", 'text/html');
        });
    }
}

