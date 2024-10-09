<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publication>
 */
class PublicationFactory extends Factory
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
            'title'=>fake()->realText(),
            'slug'=>fake()->unique()->slug(),
            'description'=>'derUsing a random letter generator can be a great way to set a randomized password that’s difficult for hackers to crack. Just make sure to set an appropriate minimum length ',
            'image' => fake()->imageUrl(),
            'url' => fake()->url()

        ];
    }
}
