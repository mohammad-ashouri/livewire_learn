<?php

namespace App\DataTypes;

use Livewire\Wireable;

class Customer implements Wireable
{
    /**
     * Construct the customer object
     * @param string $first_name
     * @param string $last_name
     * @param string $subscription_code
     */
    public function __construct(
        public string $first_name,
        public string $last_name,
        public string $subscription_code,
    )
    {

    }

    /**
     * Handle Dehydration Process
     *
     * @return array
     */
    public function toLivewire(): array
    {
        return [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'subscription_code' => $this->subscription_code,
        ];
    }


    /**
     * Handle Hydration Process
     * @param $value
     * @return self
     */
    public static function fromLivewire($value): self
    {
        return new self($value['first_name'], $value['last_name'], $value['subscription_code']);
    }
}
