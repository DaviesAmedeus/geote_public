<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'id'=>1,
                'user_id' => 1,
                'category_id'=> 1,
                'post_title' => 'Our Hero',
                'post_intro' => 'This Blog post talks about our hero KENAI',
                'post_content' => 'My hero doesn\'t need strength or able to fight monster, but their able to change your life in a different way. My heroes inspire me to be the person I can be ...'
            ],

            [
                'id'=>2,
                'user_id' => 1,
                'category_id'=> 1,
                'post_title' => 'Monkey King',
                'post_intro' => 'ighting stick team up on an epic quest during which they must go head-to-head against gods, demons',
                'post_content' => 'Charismatic Monkey and his magical fighting stick team up on an epic quest during which they must go head-to-head against gods, demons, dragons and the greatest enemy of all, Monkey\'s own ego.'
            ],


        ];

        Post::insert($posts);
    }
}
