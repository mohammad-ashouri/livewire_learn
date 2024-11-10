<?php

namespace App\Livewire;

use Livewire\Component;

class TaskRow extends Component
{
    /**
     * Task key
     * @var string
     */
    public string $taskKey;

    /**
     * Task value
     * @var string
     */
    public string $taskValue;

    /**
     * Mount the component
     * @param $taskKey
     * @param $taskValue
     * @return void
     */
    public function mount($taskKey, $taskValue)
    {
        $this->taskKey = $taskKey;
        $this->taskValue = $taskValue;
    }

}
