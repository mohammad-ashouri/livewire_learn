<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Notification extends Component
{
    /**
     * Notification Message
     * @var string
     */
    public string $message = '';

    /**
     * Notification Visibility
     * @var bool
     */
    public bool $is_visible = false;

    /**
     * Show Notification
     * @return void
     */
    #[On('notify')]
    public function show(string $message)
    {
        $this->is_visible = true;
        $this->message = $message;
        $this->dispatch('hide-notification');
    }
}

