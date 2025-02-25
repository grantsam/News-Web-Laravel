<?php

namespace Database\Factories;

use App\Models\Posts;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    protected $model = Posts::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'slug' => $this->faker->slug,
            'content' => $this->faker->paragraph,
            'image' => null,
            'author' => User::factory()->create()->name,
        ];
    }
}
