<?php

namespace App\Repositories\Interfaces;

use App\DTO\Auth\RegisterUserDTO;
use App\Models\User;

interface UserRepositoryInterface
{

    public function createUser(RegisterUserDTO $UserDTO): User;
    public function GetUserByEmail(string $email): ?User;
}
