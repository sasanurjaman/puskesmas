<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'role_user' => 2,
            'email' => 'test@example.com',
        ]);
        User::factory()->create([
            'name' => 'admin',
            'role_user' => 1,
            'email' => 'admin@example.com',
        ]);
    }
}
