<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    /* 
    //  Ind (India) Youtube https://www.youtube.com/watch?v=VjqS9LPPmIA&list=PLz_YkiqIHesvWMGfavV8JFDQRJycfHUvD&index=13
    public function getAllPost()
    {
        $posts = DB::table('posts')->get();
        return view('posts', compact('posts'));
    }*/

    public function home()
    {
        // JSON
        //return Post::all();

        //  On This Place I Get Template From
        //  \Resources\View\TEMPLATE.blade.php  >>> OR <<<
        //  \Resources\View\FOLDER\TEMPLATE.blade.php

        return view( /*template:*/ 'posts.index',[
            'posts' => Post::latest()->get(),
            //'title' => '(ಠ_ಠ)',
            //'posts' => Post::all()
        ]);

        //  JSON view examples >>>
        //return Post::all();
        //return Post::oldest('id')->get();
        //return Post::latest()->get();
        //return User::first()->posts;
        //return Post::all()->pluck('title');
        //return Post::all()->last();
        //return DB::table('posts')->get();
    }


    public function about()
    {
        return DB::table('posts')->get();
    }


    public function contact()
    {
        return Post::all();
    }

}
