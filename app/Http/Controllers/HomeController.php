<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\Rubric;
use App\Models\Tag;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {


        /*$posts =Post::with('rubric')->where('id','>',1)->get();
        foreach ($posts as $post) {
            dump($post->title, $post->rubric->title);
        }*/

       /* $posts = Post::find(11);
        dump($posts->title);
        foreach ($posts->tags as $tag){
            dump($tag->title);
        }*/

        /*$tags = Tag::find(1);
        dump($tags->title);
        foreach ($tags->posts as $post){
            dump($post->title);
        }*/
        return view('home');
    }

    public function test()
    {
        return __METHOD__;
    }
}
