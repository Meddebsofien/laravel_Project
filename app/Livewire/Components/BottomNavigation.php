<?php

namespace App\Livewire\Components;

use Livewire\Component;

class BottomNavigation extends Component
{



    public $next;
    public $back;
    public function shownext()
    {

        $this->dispatch('showComponent', $this->next);


    }
    public function showback()
    {
        $this->dispatch('showComponent', $this->back);


    }
    protected $listeners = [
        'formValidated' => 'handleFormValidated',
    ];

    public function handleFormValidated($isValid)
    {
        if ($isValid) {
            $this->dispatch('showComponent', $this->next);
        } else {
            session()->flash('error', 'Please fill out all required fields.');
        }
    }


    public function render()
    {
        return view('livewire.components.bottom-navigation');
    }
    public function showAccess()
    {
        $this->dispatch('showComponent', 'access');
    }
    public function showProfile()
    {
        $this->dispatch('showComponent', 'profile');
    }
    public function showAcceil()
    {
        $this->dispatch('showComponent', 'acceil');
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
