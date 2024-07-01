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

        //     [
        //         'id'=>2,
        //         'user_id' => 1,
        //         'category_id'=> 1,
        //         'post_title' => 'Monkey King',
        //         'post_intro' => 'ighting stick team up on an epic quest during which they must go head-to-head against gods, demons',
        //         'post_content' => 'Charismatic Monkey and his magical fighting stick team up on an epic quest during which they must go head-to-head against gods, demons, dragons and the greatest enemy of all, Monkey\'s own ego.',
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],

        //     [
        //         'id'=>3,
        //         'user_id' => 1,
        //         'category_id'=> 1,
        //         'post_title' => 'Huku',
        //         'post_intro' => 'iexecuted to retrieve each chunk of records passed to the closure.hich they must go head-to-head against gods, demons',
        //         'post_content' => 'also be updating while iterating over the results, you should use the lazyById method. Internally, the lazyById method will
        //          always retrieve models with an id on an epic quest during which they must go head-to-head against gods, demons, dragons and the greatest enemy of all, Monkey\'s own ego.',
        //          'created_at' => $now,
        //          'updated_at' => $now,
        //     ],

        //     [
        //         'id' => 4,
        //         'user_id' => 1,
        //         'category_id' => 1,
        //         'post_title' => 'The Adventure Begins',
        //         'post_intro' => 'Join our intrepid hero as they embark on an epic quest.',
        //         'post_content' => 'Discover ancient treasures, brave perilous dungeons, and forge alliances with unlikely allies.',
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'id' => 5,
        //         'user_id' => 1,
        //         'category_id' => 1,
        //         'post_title' => 'Secrets of the Lost Temple',
        //         'post_intro' => 'Unravel the mysteries hidden within the forgotten ruins of a lost civilization.',
        //         'post_content' => 'Decode cryptic messages, dodge deadly traps, and unearth the truth that has been buried for centuries.',
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],
        //     [
        //         'id' => 6,
        //         'user_id' => 1,
        //         'category_id' => 1,
        //         'post_title' => 'Beyond the Horizon',
        //         'post_intro' => 'Venture into uncharted waters and explore the vast expanse of the unknown.',
        //         'post_content' => 'Encounter mythical creatures, chart unexplored territories, and chart a course towards destiny.',
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],

        //     [
        //         'id' => 7,
        //         'user_id' => 1,
        //         'category_id' => 1,
        //         'post_title' => 'Echoes of the Past',
        //         'post_intro' => 'Confront ghosts of bygone eras and confront the legacy of history.',
        //         'post_content' => 'Uncover the forgotten tales of those who came before, and learn from the mistakes of the past.',
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],

        //     [
        //         'id' => 8,
        //         'user_id' => 1,
        //         'category_id' => 1,
        //         'post_title' => 'Rise of the Phoenix',
        //         'post_intro' => 'Witness the rebirth of a legendary creature and the dawn of a new era.',
        //         'post_content' => 'Experience the fiery passion of resurrection, and soar to new heights of power and glory.',
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],

        //     [
        //         'id' => 9,
        //         'user_id' => 1,
        //         'category_id' => 1,
        //         'post_title' => 'Shadows of Betrayal',
        //         'post_intro' => 'Navigate the treacherous waters of deception and intrigue.',
        //         'post_content' => 'Expose hidden agendas, unravel tangled webs of deceit, and reclaim what was stolen.',
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],

        //     [
        //         'id' => 10,
        //         'user_id' => 1,
        //         'category_id' => 1,
        //         'post_title' => 'Legends of the Night',
        //         'post_intro' => 'Embrace the darkness and explore the mysteries that lurk in the shadows.',
        //         'post_content' => 'Encounter creatures of myth and legend, and discover the truth behind the veil of night.',
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],

        //     [
        //         'id' => 11,
        //         'user_id' => 1,
        //         'category_id' => 1,
        //         'post_title' => 'Whispers in the Wind',
        //         'post_intro' => 'Listen closely and hear the secrets whispered on the breeze.',
        //         'post_content' => 'Follow the whispers to hidden treasures, forgotten knowledge, and untold destinies.',
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],

        //     [
        //         'id' => 12,
        //         'user_id' => 1,
        //         'category_id' => 1,
        //         'post_title' => 'Echoes of Eternity',
        //         'post_intro' => 'Reverberations of the past resonate through the corridors of time.',
        //         'post_content' => 'Explore the echoes of ancient civilizations, and discover the timeless truths that bind us all.',
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ],

        //     [
        //         'id' => 13,
        //         'user_id' => 1,
        //         'category_id' => 1,
        //         'post_title' => 'A New Dawn',
        //         'post_intro' => 'As the night fades, a new day dawns upon the horizon.',
        //         'post_content' => 'Embrace the promise of a fresh beginning, and seize the opportunities that lie ahead.',
        //         'created_at' => $now,
        //         'updated_at' => $now,
        //     ]


        // ];

        // Post::insert($posts);
    }
}
