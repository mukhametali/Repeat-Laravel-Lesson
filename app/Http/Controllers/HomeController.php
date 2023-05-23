<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\Rubric;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        /*$post = Post::find(2);
        dump($post->title, $post->rubric->title);*/
//        $rubric = Rubric::find(3);
        /*$rubric = Rubric::find(1);
        dump($rubric->posts);*/

        /*$post = Post::find(1);
        dump($post->title, $post->rubric->title);*/
        return view('home');
    }

    public function test()
    {
        return __METHOD__;
    }
}
