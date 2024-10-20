<?php

namespace App\Livewire\Post;

use Illuminate\Contracts\View\View;
use Livewire\Attributes\Title;
use Livewire\Component;

class Index extends Component
{
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
    #[Title('posts')]
    public function render(): View
    {
        return view('livewire.post.index', $this->bag())->extends('layouts.master')->section('app');
    }

}
