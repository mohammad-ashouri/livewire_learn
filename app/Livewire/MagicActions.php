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
     * Username
     * @var string
     */
    public string $username = '';

    /**
     * Parent Status
     * @var string
     */
    public string $parentStatus = 'not-updated';

    /**
     * Handle Query input updates
     * @param ?string $query
     * @return void
     */
    public function handleQueryUpdate(?string $query): void
    {
        $this->query = $query;
    }

    /**
     * Update Parent Status
     * @return void
     */
    public function updateParentStatus(): void
    {
        $this->parentStatus = 'updated from child component';
    }
}
