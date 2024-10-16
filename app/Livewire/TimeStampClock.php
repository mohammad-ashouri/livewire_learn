<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class TimeStampClock extends Component
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
        return view('livewire.time-stamp-clock', $this->bag());
    }
}
