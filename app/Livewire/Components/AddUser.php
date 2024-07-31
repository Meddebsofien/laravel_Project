<?php

namespace App\Livewire\Components;

use App\Models\Booking;
use Livewire\Component;

class AddUser extends Component
{
    public $travelwith;
    public $nbguest = 0;
    public $bookinginfo;
    public $propertyAdd;
    protected $rules = [
        'travelwith' => 'required',


    ];
    public function updateAndValidate($propertyName, $value)
    {

        $this->$propertyName = $value;
        $this->validateOnly($propertyName);
        if ($this->$propertyName == 'alone') {
            $this->nbguest = 1;
        }
        // dd($this->$propertyName);
    }
    public function mount()
    {
        //session()->forget('adduserData');
        // dd("identityData", session('identityData'));
        // $this->guest = session('Guest_id', '');
        $this->bookinginfo = session('bookinginfo', '');
        $this->propertyAdd = session('propertyAdd', '');
        $this->travelwith = session('adduserData.travelwith', '');
        $this->nbguest = session('adduserData.nbguest', '');

    }

    public function increment()
    {
        $this->nbguest++;
    }
    public function decrement()
    {
        if ($this->nbguest > 1)
            $this->nbguest--;
    }

    public function submit()
    {
        $this->validate();
        // $this->dispatch('validateForm');

        Booking::updateOrCreate(
            [
                'id' => $this->bookinginfo->id,
            ],
            [
                'number_of_guests' => $this->nbguest,
            ]
        );
        // Logique de soumission du formulaire, comme l'enregistrement des données en session
        session()->put('adduserData', [
            'travelwith' => $this->travelwith,
            'nbguest' => $this->nbguest,

        ]);

        $this->dispatch('formSubmitted');

    }
    public function render()
    {
        return view('livewire.components.add-user');
    }
    public function showFormidentity()
    {
        $this->dispatch('showComponent', 'form-identity');
    }

    public function showFormquestion()
    {
        $this->dispatch('showComponent', 'form-question');
    }

    public function showFormadduser()
    {
        $this->dispatch('showComponent', 'form-adduser');
    }

    public function showFormcard()
    {
        $this->submit();
        $this->dispatch('showComponent', 'form-card');
    }
}
