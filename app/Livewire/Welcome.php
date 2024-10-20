<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class Welcome extends Component
{
    /**
     * User email
     * @var string $email
     */
    public string $email = '';

    /**
     * Front-End data bag
     * @return array
     */
    public function bag(): array
    {
        return [];
    }

    /**
     * Mounting the component
     * @param string $email
     * @return void
     */
    public function mount(string $email): void
    {
        $this->email = strtoupper($email);
    }

    /**
     * Render the component view
     * @return View
     */
    public function render(): View
    {
        return view('livewire.welcome', $this->bag())->layout('components.layouts.with-navigation')->title("Welcome $this->email ");
    }

}
