<?php

namespace App\Livewire;

use Livewire\Component;

class LifeCycle extends Component
{
    /**
     * Creation Time
     * @var int
     */
    public int $creation_time;

    /**
     * Mount function execution count
     * @var int
     */
    public int $mount_calls = 0;

    /**
     * Last Boot Time
     * @var int
     */
    public int $boot_time;

    /**
     * Boot function execution count
     * @var int
     */
    public int $boot_calls = 0;

    /**
     * Route param uuid
     * @var ?string
     */
    public ?string $uuid;

    /**
     * Username
     * @var string
     */
    public string $username = '';

    /**
     * User ID
     * @note NOT-LOCKED for educational purpose
     * @var int
     */
    public int $user_id = 1;

    /**
     * Email
     * @var string
     */
    public string $email;

    /**
     * Mount the component
     * @param ?string $uuid
     * @return void
     */
    public function mount(string $uuid = null): void
    {
        //  on component creation
        //  executes only 1 time
        $this->creation_time = time();
        $this->mount_calls++;
        $this->uuid = $uuid;
    }

    /**
     * Boot the component
     * @return void
     */
    public function boot(): void
    {
        // executes on beginning of every request (initial, subsequent)
        $this->boot_time = time();
        $this->boot_calls++;
    }

    /**
     * Updating Hook
     * @param string $property
     * @param mixed $value
     * @return void
     * @throws \Exception
     */
    public function updating(string $property, mixed $value): void
    {
//        if ($property == 'user_id') {
//            throw new \Exception('User ID can not changed!');
//        }
//
//        if ($property == 'username' and strlen($value) <= 3) {
//            $this->addError('username', 'Username must be at least 3 characters long!');
//        } else {
//            $this->resetErrorBag('username');
//        }
    }

    /**
     * Updated Hook
     * @param string $property
     * @param mixed $value
     * @return void
     */
    public function updated(string $property, mixed $value): void
    {
//        if ($property == 'username') {
//            $this->username = strtolower($value);
//        }
//        if ($property == 'email') {
//            $this->username = strtolower($this->email);
//        }
    }

    public function updatingEmail(mixed $value): void
    {
        if (strlen($value) <= 3) {
            $this->addError('email', 'Email must be at least 3 characters long!');
        } else {
            $this->resetErrorBag('email');
        }
    }
    public function updatedEmail(mixed $value): void
    {
        $this->email = trim(strtolower($this->email));
    }
}
