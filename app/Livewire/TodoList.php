<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Renderless;
use Livewire\Component;

class TodoList extends Component
{
    /**
     * Tasks list
     * @var array
     */
    public array $tasks = [];

    /**
     * Add task to tasks list
     * @param string $task
     * @return void
     */
    public function addTask(string $task): void
    {
        $this->tasks[md5($task)] = $task;
    }

    /**
     * Delete task
     * @param string $key
     * @return void
     */
    public function deleteTask(string $key): void
    {
        unset($this->tasks[$key]);
    }

    /**
     * Like us!
     * @return void
     */
    #[Renderless]
    public function likeUs(): void
    {
        Log::error('someone liked us!');
//        $this->skipRender(); # same as #[Renderless]
    }

    /**
     * Alert using js
     * @return void
     */
    public function alertMe():void
    {
        $this->js("alert('Alerted')");
    }
}
