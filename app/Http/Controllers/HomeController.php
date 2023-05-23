<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $post = new Post();
        $post->title = 'Title 2';
//        $post->content = 'Content 1';
        $post->save();

        return view('home');
    }

    public function test()
    {
        return __METHOD__;
    }
}
