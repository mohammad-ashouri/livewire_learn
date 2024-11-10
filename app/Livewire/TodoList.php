<?php

namespace App\Livewire;

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
}
