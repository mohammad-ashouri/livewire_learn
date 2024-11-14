<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class Grid extends Component
{
    /**
     * Update posts list
     * @return void
     */
    #[On('post-created')]
    public function updatePostsList(): void
    {
        $this->dispatch('$refresh');
    }

    /**
     * Get all posts list
     * @return array
     */
    #[Computed]
    public function posts(): array
    {
        return Post::all()->toArray();
    }
}
