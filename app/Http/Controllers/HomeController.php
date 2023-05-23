<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
//        $data = Country::all();
//        $data = Country::query()->limit(5)->get();
//        $data = Country::where('Code','<','ALB')->select('Code','Name')->offset(1)->limit(2)->get();
//        $data = City::find(5);
//        $data = Country::find('AGO');
      /* $post = new Post();
       $post->title = 'Title 4';
       $post->content = 'Content';
       $post->save();*/
//        Post::create(['title' => 'Title 6', 'content' => 'Content 6']);
        /*$post = new Post();
        $post->fill(['title' => 'Title 7', 'content' => 'Content 7']);
        $post->save();*/

        /*$post = Post::find(5);
        $post->title = 'Title 5';
        $post->content = 'content 5';
        $post->save();*/

        /*Post::where('id','>',3)
        ->update(['updated_at' => NOW()]);*/

        /*$post = Post::find(7);
        $post->delete();*/

//        Post::destroy(6);
        return view('home');
    }

    public function test()
    {
        return __METHOD__;
    }
}
