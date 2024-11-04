<?php

namespace App\Livewire;

use Livewire\Component;

class Event extends Component
{
    /**
     * Mouse Enter Counts
     * @var int
     */
    public int $mouseEnterCounts = 0;
    /**
     * Mouse Leave Counts
     * @var int
     */
    public int $mouseLeaveCounts = 0;
    /**
     * Hello Counts
     * @var int
     */
    public int $helloCounts = 0;

    /**
     * Handle Mouse Enter Event
     * @return void
     */
    public function mouseEnter(): void
    {

        $this->mouseEnterCounts++;
    }

    /**
     * Handle Mouse Leave Event
     * @return void
     */
    public function mouseLeave(): void
    {

        $this->mouseLeaveCounts++;
    }

    /**
     * Increment Hello Count
     * @return void
     */
    public function incrementHelloCount(): void
    {
        $this->helloCounts++;
    }
}
