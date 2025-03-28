<?php
namespace App\DTO\Auth;

readonly class RegisterUserDTO
{
    public readonly string $name;
    public readonly string $email;
    public readonly string $password;
    public ?string $role;

    public function __construct(string $name, string $email, string $password, ?string $role = 'client')
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }
}
