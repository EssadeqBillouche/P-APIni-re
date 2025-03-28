<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Seed auth_db
        $this->call(UserSeeder::class);

        // Seed plant_db

    }
}
