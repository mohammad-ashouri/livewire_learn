<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class NewsletterForm extends Form
{
    /**
     * Full name
     * @var string|null
     */
    #[Validate(['required', 'string', 'min:3'])]
    public ?string $fullName;

    /**
     * Email
     * @var string|null
     */
    #[Validate('required', 'email', 'unique:newsletters,email')]
    public ?string $email;

}
