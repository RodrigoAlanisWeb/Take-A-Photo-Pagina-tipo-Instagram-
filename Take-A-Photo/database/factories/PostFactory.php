<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        return [
            'slug' => Str::slug($title,'-'),
            'title' => $title,
            'description' => $this->faker->paragraph() . $this->faker->paragraph(),
            'categorie_id' => 1,
            'user_id' => 1, 
        ];
    }
}
