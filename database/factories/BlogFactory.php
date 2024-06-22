<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\User;
use App\Models\BlogCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word,
            'description' => fake()->sentence,
            'image' => fake()->imageUrl(),
            'blog_category_id' => BlogCategory::all()->random()->id,
            'user_id' => User::all()->random()->id,
        ];
    }
}
