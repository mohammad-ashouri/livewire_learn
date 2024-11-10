<?php

namespace App\Livewire;

use Livewire\Component;

class MagicActions extends Component
{
    /**
     * Query
     * @var string
     */
    public string $query = '';

    /**
     * Dark Mode Indicator
     * @var bool
     */
    public bool $isDark = false;
    /**
     * Handle Query input updates
     * @param ?string $query
     * @return void
     */
    public function handleQueryUpdate(?string $query): void
    {
        $this->query = $query;
    }
}
