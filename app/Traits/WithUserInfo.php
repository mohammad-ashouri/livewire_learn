<?php

namespace App\Traits;

trait WithUserInfo
{
    /**
     * User ID
     * @note NOT-LOCKED for educational purpose
     * @var int
     */
    public int $user_id = 1;

    /**
     * Username
     * @var string
     */
    public string $username = '';

    /**
     * Email
     * @var string
     */
    public string $email;

    public function updatingEmailWithUserInfo(mixed $value): void
    {
        if (strlen($value) <= 3) {
            $this->addError('email', 'Email must be at least 3 characters long!');
        } else {
            $this->resetErrorBag('email');
        }
    }

    public function updatedEmailWithUserInfo(mixed $value): void
    {
        $this->email = trim(strtolower($this->email));
    }
    /**
     * Updating Hook
     * @param string $property
     * @param mixed $value
     * @return void
     * @throws \Exception
     */
    public function updatingWithUserInfo(string $property, mixed $value): void
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
    public function updatedWithUserInfo(string $property, mixed $value): void
    {
//        if ($property == 'username') {
//            $this->username = strtolower($value);
//        }
//        if ($property == 'email') {
//            $this->username = strtolower($this->email);
//        }
    }


}
