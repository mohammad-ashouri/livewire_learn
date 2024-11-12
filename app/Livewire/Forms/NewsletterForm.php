<?php

namespace App\Livewire\Forms;

use App\Models\Newsletter;
use Livewire\Attributes\Validate;
use Livewire\Form;

class NewsletterForm extends Form
{
    /**
     * Is succeeded to handle process
     * @var bool
     */
    public bool $isSucceeded = false;

    /**
     * Process message
     * @var ?string
     */
    public ?string $message = '';

    /**
     * Full name
     * @var string|null
     */
    #[Validate(['required', 'string', 'min:3'])]
    public ?string $full_name;

    /**
     * Email
     * @var string|null
     */
    #[Validate(['required', 'email', 'unique:newsletters,email'])]
    public ?string $email;

    /**
     * Join the newsletter
     * @return void
     */
    public function subscribe(): void
    {
        sleep(1);
        $this->validate();
        $joined = Newsletter::create($this->pull());
        if ($joined) {
            $this->isSucceeded = true;
            $this->message = "You're joined to our newsletter service!";
            // $this->reset(); # Way no.1
        }
    }

    /**
     * Unsubscribe a user from newsletter
     * @param int $id
     * @return void
     */
    public function unsubscribe(int $id)
    {
        $subscriber = Newsletter::find($id);
        if ($subscriber) {
            $subscriber->delete();
            $this->isSucceeded = true;
            $this->message = $subscriber->full_name . " removed from our newsletter service!";
        }
    }
}
