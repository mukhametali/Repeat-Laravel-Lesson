<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\Rubric;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $posts = Post::orderBy('id','desc')->paginate(3);
        $title =  'Home Page';
        return view('home', compact('title','posts'));
    }

    public function create()
    {
        $title =  'Create Post';
        $rubrics = Rubric::pluck('title','id')->all();
        return view('create', compact('title','rubrics'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:5|max:100',
            'content' => 'required',
            'rubric_id' => 'integer'
        ]);


        Post::create($request->all());

        $request->session()->flash('success', 'Данные сохранены!');

        return redirect()->route('home');
    }
}
