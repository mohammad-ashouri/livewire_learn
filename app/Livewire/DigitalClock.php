<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Contracts\View\View;

class DigitalClock extends Component
{
    /**
     * Front-End data bag
     * @return array
     */
    public function bag(): array
    {
        return [];
    }

    /**
     * Render the component view
     * @return View
     */
    public function render(): View
    {
        return view('livewire.digital-clock', $this->bag());
    }

}
