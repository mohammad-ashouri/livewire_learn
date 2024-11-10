<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class NewsletterForm extends Component
{
    /**
     * Full Name
     * @var string
     */
//    #[Validate(['required', 'string', 'min:5'])] #if we need to validate every property
    public string $fullName = '';

    /**
     * Email
     * @var string
     */
//    #[Validate(['required', 'email'])] #if we need to validate every property
    public string $email = '';

    /**
     * If we need to validate all properties
     * Validation rules
     * @return array
     */
    public function rules(): array
    {
        return [
            'fullName' => ['required', 'string', 'min:5'],
            'email' => ['required', 'email'],
        ];
    }

    /**
     * Register a user by its email to our newsletter service
     * @return void
     */
    public function joinNewsletter(): void
    {
        $this->validate();
    }
}
