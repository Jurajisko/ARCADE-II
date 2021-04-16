<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;


class DatabaseSeeder extends Seeder
{
  /* 
  //  Old code
  public function run()
  {
    factory(APP\Models\User::class, 10)->create();
  }
  */

 

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

      User::factory()
            ->count(30)
            ->hasPosts(3)
            ->create();

      \App\Models\Comment::factory(90)->create();

      
      


      //$this->call(PostsTableSeeder::class);
      //$this->call(UsersTableSeeder::class);
      //$this->call(CommentTableSeeder::class);
      // New Code
      //  

      /*
      // OLD CODE
      factory(App\User::class, 5)->create()->each(function ($user){
        for ($i = 0; $i < 5; $i++) {
          $user->posts()->save(factory(App\Post::class)->make());
          $user->comments()->save(factory(App\Comment::class)->make());
        }
      })
      */
    }
    
    
}
