<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Ensure we're using the 'auth' connection
        DB::connection('auth')->table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => bcrypt('secret123'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Employee User',
                'email' => 'employee@example.com',
                'password' => bcrypt('secret123'),
                'role' => 'employee',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Customer User',
                'email' => 'customer@example.com',
                'password' => bcrypt('secret123'),
                'role' => 'customer', // Default, but explicitly set for clarity
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
