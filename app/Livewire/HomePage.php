<?php

namespace App\Livewire;

use App\Livewire\Forms\NewsletterForm;
use App\Models\Newsletter;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Forms - Home')]
class HomePage extends Component
{
    public NewsletterForm $form;

    public bool $isJoined = false;

    public function joinNewsletter()
    {
        $this->validate();
        $joined = Newsletter::create(
            [
                'email' => $this->form->email,
                'full_name' => $this->form->fullName
            ]
        );
        if ($joined) {
            $this->isJoined = true;
        }
    }
}
