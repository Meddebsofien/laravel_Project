<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Item extends Component
{
    public $composant;
    public $num;
    public $icon;

    public function mount($composant, $num, $icon)
    {
        $this->composant = $composant;
        $this->num = $num;
        $this->icon = $icon;
    }
    public function render()
    {
        return view('livewire.components.item');
    }
}
