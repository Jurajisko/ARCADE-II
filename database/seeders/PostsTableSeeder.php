<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

// >>>
use App\Models\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(100)->create();
        //\App\Models\Post::factory(100)->create();
    }
}
