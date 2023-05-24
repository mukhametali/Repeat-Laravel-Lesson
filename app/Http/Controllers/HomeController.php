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
        $posts = Post::orderBy('id','desc')->get();
        $title =  'Home Page';
        return view('home', compact('title','posts'));
    }

    public function test()
    {
        return __METHOD__;
    }
}
