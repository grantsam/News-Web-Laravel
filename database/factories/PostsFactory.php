<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Posts>
 */
class PostsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $images = glob(public_path('img/*.jpg')); // Mengambil semua file .jpg di folder public/img
        $randomImage = basename($images[array_rand($images)]); // Memilih gambar secara acak

        return [
            'title' => fake()->sentence(),
            'author' => fake()->name(),
            'category_id' => Category::factory(),
            'slug' => Str::slug(fake()->sentence()),
            'content' => fake()->paragraph(),
            'image'   => 'img/' . $randomImage, // Path relatif gambar
        ];
    }
}
