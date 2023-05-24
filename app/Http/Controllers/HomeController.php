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
    public function index(Request $request)
    {
        /*$request->session()->put('test', 'Test value');
        session([
            'cart' => [
                [
                    'id' => 1,
                    'title' => 'Product 1'
                ],
                [
                    'id' => 2,
                    'title' => 'Product 2'
                ],

            ]
        ]);*/

        /*dump(session('test'));
        dump(session('cart')[1]['title']);
        dump($request->session()->get('cart')[0]['title']);
        dump($request->session()->all());*/

        /*$request->session()->push('cart', ['id' => 3, 'title' => 'Product 3']);*/

        /* dump($request->session()->pull('test'));*/

        /*$request->session()->forget('test');*/

        /*$request->session()->flush();*/



        /*dump(session()->all());*/

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


        Post::create($request->all());

        $request->session()->flash('success', 'Данные сохранены!');

        return redirect()->route('home');
    }
}
