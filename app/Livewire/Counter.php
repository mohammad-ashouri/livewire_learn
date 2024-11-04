<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    /**
     * Clicks count
     * @var int
     */
    public int $clicks = 0;

    /**
     * Increments clicks count
     * @return void
     */
    public function increment(): void
    {
        $this->clicks++;
    }

    /**
     * Decrements clicks count
     * @return void
     */
    public function decrement(): void
    {
        $this->clicks--;
    }
}
