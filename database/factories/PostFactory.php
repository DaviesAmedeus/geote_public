<?php

namespace Database\Factories;

use App\Models\User;
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
            'category_id'=> fake()->randomElement([1,3]),
            'post_title'=>fake()->jobTitle(), 
            'post_intro'=>'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.', 
            'status' => 'Inprogress',
            'post_content'=>fake()->sentence(),
            'post_picture' => fake()->imageUrl(),
            'author_name'=>fake()->name(),
            'author_photo' => fake()->imageUrl(),
            'author_desc'=>'max:500',
            
        ];
    }
}
