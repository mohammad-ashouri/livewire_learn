<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.with-navigation')]
class Clocks extends Component
{
    public function render()
    {
        return view('livewire.clocks');
    }
}
