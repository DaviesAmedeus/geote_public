<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     
    public function run(): void
    {
         Post::factory(10)->create();
        // $now = Carbon::now();
        // $posts = [
        //     [
        //         'id'=>1,
        //         'user_id' => 1,
        //         'category_id'=> 1,
        //         'post_title' => 'Our Hero',
        //         'post_intro' => 'This Blog post talks about our hero KENAI',
        //         'post_content' => 'My hero doesn\'t need strength or able to fight monster, but their able to change your life in a different way. My heroes inspire me to be the person I can be ...',
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],

        // Post::insert($posts);
    }
}
