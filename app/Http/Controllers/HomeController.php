<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Country;
use App\Models\Post;
use App\Models\Rubric;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('id','desc')->get();
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

        /*$rules = [
            'title' => 'required|min:5|max:100',
            'content' => 'required',
            'rubric_id' => 'integer'
        ];
        $messageErrors = [
            'title.required' => 'Заполните поле название',
            'title.min' => 'Название должно быть минимум 5 символов',
            'title.max' => 'Название не должно превышать 100 символов',
            'content.required' => 'Заполните текст',
            'rubric_id.integer' => 'Выберите рубрику из списка',
        ];*/



        $validator = Validator::make($request->all())->validate();

        Post::create($request->all());
        return redirect()->route('home');
    }
}
