<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Properties / Articles')]
class ArticlesPage extends Component
{
    public $isTimerOn;
    public $description;

    public function changeDescription()
    {
        $this->description = 'Changed';
    }

    public function mount()
    {
        $this->isTimerOn = true;
        $this->description = 'You are viewing your articles at ' . Carbon::now()->format('d F Y - H:i:s');

        $this->fill([
            'isTimerOn' => true,
            'description' => 'Hello, Im new description',
        ]);
    }
}
