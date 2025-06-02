<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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
            'name' => 'Agustín Gómez Díaz',
            'email' => 'agustíngd18@gmail.com',
            'password' => bcrypt('L12e#Dy6$'),
        ]);

        Category::factory(5)->create();
        Post::factory(100)->create();
    }
}
