<?php

namespace App\Livewire;

use App\Livewire\Forms\NewsletterForm;
use App\Models\Newsletter;
use Livewire\Attributes\Renderless;
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
     * Query to search
     * @var string
     */
    public string $query = '';

    /**
     * Join the newsletter
     * @return void
     */
    public function joinNewsletter()
    {
        $this->form->subscribe();
    }

    public int $counts = 0;

    /**
     * Unsubscribe from newsletter based on user-subscription id
     * @param int $id
     * @return void
     */
    public function unsubscribeFromNewsletter(int $id): void
    {
        $this->form->unsubscribe($id);
    }

    public array $result = [];

    #[Renderless]
    public function updatedQuery($query): void
    {
        $this->result = Newsletter::where('email', 'like', "%$query%")->orWhere('full_name', 'like', "%$query%")->get()->toArray();
    }
}
