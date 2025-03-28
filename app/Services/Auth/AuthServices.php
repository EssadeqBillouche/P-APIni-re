<?php
namespace App\Services\Auth;

use App\DTO\Auth\LoginUserTDO;
use App\DTO\Auth\RegisterUserDTO;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthServices
{
    protected UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(RegisterUserDTO $dto): User
    {
        return $this->userRepository->createUser($dto);
    }

    public function generateToken(User $user): string
    {
        return JWTAuth::fromUser($user);
    }

    public function login(LoginUserTDO $LoginDTO){
        $userData = $this->userRepository->CheckIfEmailExist($LoginDTO->getEmail());


    }
}

