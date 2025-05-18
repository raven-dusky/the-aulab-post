<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use Illuminate\Support\Str;
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

        $values = [
            'is_accepted' => true,
            'is_rejected' => false,
            'is_pending' => NULL,
        ];

        for($i = 0; $i <= 25; $i++) {
            Article::create([
                'title' => 'Articolo #' . $i,
                'subtitle' => 'Sottotitolo #' . rand(1, 100),
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                'image' => 'images/default.jpg',
                'user_id' => 1,
                'category_id' => rand(1, 6),
                'is_accepted' => $values[array_rand($values)],
                'slug' => Str::slug('Articolo #' . $i),
            ]);
        }
    }
}
