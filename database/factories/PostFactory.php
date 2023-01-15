<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->realText(25),
            'content' => fake()->realText(1000),
            'category_id' => Category::get('id')->random(),
            'preview_image' => fake()->imageUrl(),
            'main_image' => fake()->imageUrl(),
        ];
    }
}
