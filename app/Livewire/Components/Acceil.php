<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Acceil extends Component
{
    public $actuel;
    public function mount()
    {
        // session()->flush();
    }
    public function render()
    {

        return view('livewire.components.acceil');
    }
    public function showSignin()
    {
        $this->dispatch('showComponent', 'sign-in');
        $this->actuel = 1;

    }
}
