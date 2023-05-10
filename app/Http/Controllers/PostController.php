<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', 1)->get();
        foreach ($posts as $post) {
            dump($post->title);
        };
        dd($posts);
    }

    public function create()
    {
        $postArr = [
            [
                'title' => 'title 4',
                'content' => 'content 4',
                'image' => 'image 4',
                'likes' => 40,
                'is_published' => 1,
            ],
            [
                'title' => 'title 5',
                'content' => 'content 5',
                'image' => 'image 5',
                'likes' => 60,
                'is_published' => 1,
            ],
        ];
        foreach ($postArr as $item)
        {
          Post::create($item);
        };


        dd('created');
    }

    public function update()
    {
        $post = Post::find(6);
        $post->update([
            'is_published' => 0,
        ]);

        dd('updated');
    }

    public function delete()
    {
        $post = Post::withTrashed()->find(3);
        $post->restore();
        dd('restore');
    }
}
