<?php

namespace App\Livewire\Components;

use App\Models\BookingGuest;
use Livewire\Component;

class FormIdentity extends Component
{


    public $back = 'precheck';
    public $next = 'form-question';
    public $guest;
    public $bookinginfo;
    public $firstName;
    public $name;
    public $email;
    public $phone;
    public $idCard;
    public $arrivalTime;
    public $idguest;
    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function updateAndValidate($propertyName, $value)
    {
        $this->$propertyName = $value;
        $this->validateOnly($propertyName);
    }
    public function validateForm()
    {
        try {
            $this->validate();
            $this->dispatch('formValidated', true);
        } catch (\Illuminate\Validation\ValidationException $e) {
            $this->dispatch('formValidated', false);
        }
    }
    protected $listeners = [
        'validateForm' => 'validateForm',
    ];


    public function mount()
    {
        //session()->forget('identityData');
        // dd("identityData", session('identityData'));
        //  $this->guest = $this->findGuest();
        $this->guest = session('Guest_id', '');
        $this->bookinginfo = session('bookinginfo', '');
        //$this->firstName = session('identityData.firstName', '');
        // Initialiser les valeurs des propriétés à partir des données de la session ou de la base de données
        if (session()->has('identityData')) {
            $data = session('identityData');
            $this->firstName = $data['firstName'] ?? '';
            $this->name = $data['name'] ?? '';
            $this->email = $data['email'] ?? '';
            $this->phone = $data['phone'] ?? '';
            $this->idCard = $data['idCard'] ?? '';
            $this->arrivalTime = $data['arrivalTime'] ?? '';
        } else {
            // Si les données de session n'existent pas, récupérer depuis la base de données
            if ($this->guest) {
                $this->firstName = $this->guest->firstName ?? '';
                $this->name = $this->guest->name ?? '';
                $this->email = $this->guest->email ?? '';
                $this->phone = $this->guest->phone ?? '';
                //    $this->idCard = $this->guest->idCard ?? '';
                $this->arrivalTime = $this->bookinginfo->check_in ?? '';
            }
        }


    }

    public function submit()
    {
        $this->validate();
        // $this->dispatch('validateForm');

        // Logique de soumission du formulaire, comme l'enregistrement des données en session
        BookingGuest::updateOrCreate(
            ['id' => $this->guest->id],
            [
                'firstName' => $this->firstName,
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'idCard' => $this->idCard,
                'arrivalTime' => $this->arrivalTime,
            ]
        );

        // Enregistrer les données en session
        session()->put('identityData', [
            'firstName' => $this->firstName,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'idCard' => $this->idCard,
            'arrivalTime' => $this->arrivalTime,
        ]);
        $this->dispatch('formSubmitted');

    }

    public function findGuest()
    {
        return BookingGuest::where('id', $this->idguest)->first();
    }


    public function render()
    {
        return view('livewire.components.form-identity');
    }
    public function showconfirmation()
    {

        $this->dispatch('showComponent', 'confirmation');
    }
    public function showAnnulation()
    {
        $this->dispatch('showComponent', 'annulation');
    }

    public function showFormidentity()
    {
        $this->dispatch('showComponent', 'form-identity');
    }

    public function showFormquestion()
    {
        $this->submit();

        // $this->dispatch('formSubmitted');
        $this->dispatch('showComponent', 'form-question');
    }

    public function showFormadduser()
    {
        $this->submit();

        $this->dispatch('showComponent', 'form-adduser');
    }

    public function showFormcard()
    {
        $this->submit();

        $this->dispatch('showComponent', 'form-card');
    }
    public function showFprecheck()
    {
        $this->submit();

        $this->dispatch('showComponent', 'precheck');
    }



}
