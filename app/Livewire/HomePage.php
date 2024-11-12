<?php

namespace App\Livewire;

use App\Livewire\Forms\NewsletterForm;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Forms - Home')]
class HomePage extends Component
{
    /**
     * Newsletter form
     * @var NewsletterForm
     */
    public NewsletterForm $form;

    /**
     * Join the newsletter
     * @return void
     */
    public function joinNewsletter()
    {
        $this->form->join();
    }
}
