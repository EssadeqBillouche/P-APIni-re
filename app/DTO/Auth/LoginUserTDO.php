<?php

namespace App\DTO\Auth;

readonly class LoginUserTDO
{
    private string $email;
    private string $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }
    public function getEmail()
    {
        return $this->email;
    }




}
