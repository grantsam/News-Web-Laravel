<?php

namespace Database\Factories;

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
            'slug' => fake()->slug(),
            'content' => fake()->paragraph(),
            'image'   => 'img/' . $randomImage, // Path relatif gambar
        ];
    }
}
