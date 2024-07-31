<?php

namespace App\Livewire\Components;

use Livewire\Component;

class FormCard extends Component
{

    public $codesecurity;
    public $expday;
    public $cardnumber;
    public $namecard;
    public $bookinginfo;
    protected $rules = [
        'codesecurity' => 'required|numeric',
        'expday' => 'required|date_format:m/y',
        'cardnumber' => 'required|numeric',
        'namecard' => 'required|string|min:6',
    ];
    public function mount()
    {
        $this->bookinginfo = session('bookinginfo', '');
        $this->namecard = session('cardData.namecard', '');
        $this->expday = session('cardData.expday', '');
        $this->cardnumber = session('cardData.cardnumber', '');
        $this->codesecurity = session('cardData.codesecurity', '');
    }
    public function updateAndValidate($propertyName, $value)
    {
        $this->$propertyName = $value;
        $this->validateOnly($propertyName);
    }
    public function submit()
    {
        $this->validate();

        session()->put('cardData', [
            'codesecurity' => $this->codesecurity,
            'expday' => $this->expday,
            'cardnumber' => $this->cardnumber,
            'namecard' => $this->namecard,
        ]);
        $this->dispatch('formSubmitted');
    }

    public function render()
    {
        return view('livewire.components.form-card');
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
        $this->dispatch('showComponent', 'form-card');
    }
    public function showconfirmation()
    {
        $this->submit();
        $this->dispatch('showComponent', 'confirmation');
    }
}
