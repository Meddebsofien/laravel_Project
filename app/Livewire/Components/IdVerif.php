<?php

namespace App\Livewire\Components;

use Livewire\Component;

class IdVerif extends Component
{
    public $activeForm = 'identity';
    public $back = 'precheck';//    public $next = 'confirmation';
    public $next = 'confirmation';

    public function render()
    {
        return view('livewire.components.id-verif');
    }

    public function showForm($form)
    {
        $this->activeForm = $form;
    }
    public function showconfirmation()
    {
        $this->dispatch('showComponent', 'confirmation');
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
}
