<?php

namespace App\Livewire;

use Livewire\Component;

class Export extends Component
{
    /**
     * Downloadable at - unix time stamp
     * @var int
     */
    public int $downloadableAt;

    /**
     * Simulate data export process
     * @return void
     */
    public function export(): void
    {
        $this->downloadableAt = now()->addSeconds(10)->timestamp;
    }
}
