<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('components.layouts.with-navigation')]
#[Title('Clocks')]
class Clocks extends Component
{
    public function render()
    {
        return view('livewire.clocks');
    }
}
