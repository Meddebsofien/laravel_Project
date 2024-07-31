<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Confirmation extends Component
{
    public function render()
    {
        return view('livewire.components.confirmation');
    }
    public function showdetail()
    {
        $this->dispatch('showComponent', 'detail');
    }
}
