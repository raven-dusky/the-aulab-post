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
            'name' => 'Administrator',
            'email' => 'admin@theaulabpost.it',
            'password' => bcrypt('password'),
            'is_admin' => true,
            'is_revisor' => true,
            'is_writer' => true,
        ]);

        User::factory()->create([
            'name' => 'CoolDeer98',
            'email' => 'cooldeer98@email.com',
            'password' => bcrypt('password'),
            'is_revisor' => true,
        ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@email.com',
            'password' => bcrypt('password'),
            'is_writer' => true,
        ]);
    }
}
