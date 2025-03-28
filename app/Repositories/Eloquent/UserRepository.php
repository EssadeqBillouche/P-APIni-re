<?php
namespace App\Repositories\Eloquent;

use App\DTO\Auth\RegisterUserDTO;
use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\DB;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @param RegisterUserDTO $userDTO
     * @return User
     */
    public function createUser(RegisterUserDTO $userDTO): User
    {
        // Use Query Builder to insert into the 'users' table
        $userId = DB::table('users')->insertGetId([
            'name' => $userDTO->name,
            'email' => $userDTO->email,
            'password' => $userDTO->password, // Already hashed by the service
            'role' => $userDTO->role,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Retrieve the inserted user as a User model instance
        return User::find($userId);
    }

    public function GetUserByEmail(string $email): ?User
    {
         $userData = DB::table('users')->where('email', $email)->first();

        if (!$userData) {
            return null;
        }
        $user = new User();
        $user->id = $userData->id;
        $user->name = $userData->name;
        $user->email = $userData->email;
        $user->password = $userData->password;
        $user->role = $userData->role;
        $user->exists = true; // Mark as existing to avoid re-creation

        return $user;
    }
}
