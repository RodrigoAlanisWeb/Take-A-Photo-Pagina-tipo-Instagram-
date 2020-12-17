<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Image;
use App\Models\Post;
use App\Models\User;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        Categorie::create([
            'name' => 'Prueba',
        ]);
        Post::factory(10)->create();

        for ($i=1; $i <= 10; $i++) { 
            Image::create([
                'imageable_id' => $i,
                'imageable_type' => 'App\Models\Post',
                'path' => '/base.jpg',
            ]);
        }
    }
}
