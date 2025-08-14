<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class postFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement([
                'Berita Teknologi',
                'Belajar Laravel',
                'Update Sistem',
                'Bahasa Pemrograman'
            ]),
            'slug' => fake()->slug(),
            'category_id' => Category::factory(),
            'author_id' => User::factory(),
            'content' => fake()->sentence(100),
            'image' => fake()->imageUrl(640, 480, 'news', true),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
