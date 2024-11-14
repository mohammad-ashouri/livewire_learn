<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Create extends Component
{
    /**
     * Post title
     * @var string
     */
    public string $title;

    /**
     * Post description
     * @var string
     */
    public string $description;

    /**
     * Roles object
     * @return array[]
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:3',
            'description' => 'required|string|min:3',
        ];
    }

    /**
     * Create a new post and dispatch its event
     * @return void
     */
    public function create(): void
    {
        $this->validate();

        $post = Post::create(
            [
                'title' => $this->title,
                'description' => $this->description,
                'is_published' => false
            ]
        );

        $this->dispatch(
            event: 'notify',
            message: "Post Created! $this->title"
        );

        $this->dispatch(
            event: 'post-created',
        )->to(Grid::class);
    }
}
