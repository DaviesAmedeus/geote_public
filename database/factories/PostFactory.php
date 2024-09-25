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
            'category_id'=> fake()->randomElement([1,2,3]),
//            'author_id'=>Author::factory(),
            'title'=>fake()->jobTitle(),
            'slug'=>fake()->unique()->slug(),
            'description'=>'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.',
            'status' => 'Continuing',
            'body'=>'One great way to use our random letter generator is to keep your kids entertained. Set them up with a pencil and a piece of paper, then randomly generate a letter. Whoever comes up with the most words beginning with the chosen letter wins. You can make the game more complex by generating a series of letters and requiring that the chosen words contain all of them. Or you can turn the game into a race by using a stopwatch and a time limit of one to two minutes in which players can generate words.
            If you’re a devout Scrabbler, you’re probably always looking for ways to up your game. One way to practice is to use a random letter generator. Generate a string of letters and practice finding ways to play them. You can look not only for whole words but also sections of words that might be made complete when playing them on the board. If you practice often, you’re sure to notice a boost at your next game. And, as a bonus, research has shown that word and number games like this one can help ward off mental deterioration as you age.
            You might think your password is uncrackable. But research has shown that oftentimes, even people trying to randomize their passwords follow predictable patterns. When you’re asked to add a capital letter to your password, how often is that letter the first letter of your password? When asked to add a special character, how often do you use the exclamation mark?

It’s hard to see the subtle patterns in our own thinking, especially when we’re trying hard to subvert them. Using a random letter generator can be a great way to set a randomized password that’s difficult for hackers to crack. Just make sure to set an appropriate minimum length (most websites require passwords to be at least six to twelve characters long). Also remember to include uppercase characters and special symbols when necessary.',
            'image' => fake()->imageUrl(),


        ];
    }
}
