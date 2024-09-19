<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Author;
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
    public function definition(): array
    {
        return [
            'user_id'=>User::factory(),
            'category_id'=> fake()->randomElement([1,2]),
            'author_id'=>Author::factory(),
            'title'=>fake()->jobTitle(),
            'description'=>'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.',
            'status' => 'Continuing',
            'body'=>fake()->sentence(),
            'image' => fake()->imageUrl(),


        ];
    }
}
