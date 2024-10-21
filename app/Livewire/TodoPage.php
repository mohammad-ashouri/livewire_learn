<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Properties / Todo')]
class TodoPage extends Component
{
    public $title;
    public $tasks = [];

    public function add(): void
    {
        $this->tasks[] = $this->title;
        $this->reset('title');
    }

    public function resetTasks()
    {
        $this->reset('tasks');
    }
}
