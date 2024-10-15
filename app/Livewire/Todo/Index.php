<?php

namespace App\Livewire\Todo;

use Livewire\Component;
use Illuminate\Contracts\View\View;

class Index extends Component
{
    /**
     * User entrance
     * @var string
     */
    public string $task = '';

    /**
     * User task lit
     * @var array
     */
    public array $tasks = [];

    /**
     * Add user entered task
     * @return void
     */
    public function addTask(): void
    {
        $this->tasks[] = $this->task;
        $this->reset('task');
    }

    /**
     * Reset all tasks
     * @return void
     */
    public function resetTasks(): void
    {

        $this->reset();
    }

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
        return view('livewire.todo.index', $this->bag());
    }

}
