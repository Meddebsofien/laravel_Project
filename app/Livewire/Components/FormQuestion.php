<?php

namespace App\Livewire\Components;

use App\Models\Booking;
use Livewire\Component;

class FormQuestion extends Component
{
    public $back = 'form-identity';
    public $next = 'form-adduser';

    public $PropertyAttribute;
    public $bookinginfo;
    public $tripReason;

    public $hasPet;
    public $agree;
    protected $rules = [

        'hasPet' => 'required',
        'tripReason' => 'required',

    ];
    public function mount()
    {
        //session()->forget('questionData');
        // dd("identityData", session('identityData'));
        //session()->forget('identityData');
        // dd("identityData", session('identityData'));
        //  $this->guest = $this->findGuest();
        $this->guest = session('Guest_id', '');
        $this->bookinginfo = session('bookinginfo', '');
        $this->PropertyAttribute = session('PropertyAttribute', '');
        //$this->firstName = session('identityData.firstName', '');
        // Initialiser les valeurs des propriétés à partir des données de la session ou de la base de données
        if (session()->has('questionData')) {
            $data = session('questionData');
            $this->agree = $data['agree'] ?? '';
            $this->hasPet = $data['hasPet'] ?? '';
            $this->tripReason = $data['tripReason'] ?? '';

        } else {
            // Si les données de session n'existent pas, récupérer depuis la base de données
            if ($this->PropertyAttribute) {
                $this->agree = $this->PropertyAttribute->smoking ?? '';
                $this->hasPet = $this->PropertyAttribute->pets ?? '';
                //  $this->tripReason = $this->guest->tripReason ?? '';

            }
        }

        $this->agree = session('questionData.agree', '');
        $this->hasPet = session('questionData.hasPet', '');
        $this->tripReason = session('questionData.tripReason', '');

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
    public function render()
    {
        return view('livewire.components.form-question');
    }
    public function submit()
    {
        $this->validate();
        // $this->dispatch('validateForm');
        Booking::updateOrCreate(
            ['id' => $this->bookinginfo->id],
            [
                'smoking' => $this->agree,
                'pets' => $this->hasPet,
                'reason_for_travel' => $this->tripReason,

            ]
        );
        // dd($this->agree, $this->hasPet, $this->tripReason);

        // Logique de soumission du formulaire, comme l'enregistrement des données en session
        session()->put('questionData', [
            'agree' => $this->agree,
            'hasPet' => $this->hasPet,
            'tripReason' => $this->tripReason,

        ]);



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
        $this->submit();
        $this->dispatch('showComponent', 'form-adduser');
    }

    public function showFormcard()
    {
        $this->submit();

        $this->dispatch('showComponent', 'form-card');
    }

}
