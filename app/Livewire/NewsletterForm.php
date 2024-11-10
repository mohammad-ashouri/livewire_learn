<?php

namespace App\Livewire;

use Livewire\Component;

class NewsletterForm extends Component
{
    /**
     * Full Name
     * @var string
     */
    public string $fullName = '';

    /**
     * Email
     * @var string
     */
    public string $email = '';

    /**
     * Register a user by its email to our newsletter service
     * @return void
     */
    public function joinNewsletter(): void
    {
        $this->fullName = 'Joined';
    }
}
