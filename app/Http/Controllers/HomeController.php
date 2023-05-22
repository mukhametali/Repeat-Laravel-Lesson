<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $res = 'Get';
        $name = 'Ali';
        return view('home',compact('res','name'));
    }

    public function test()
    {
        return __METHOD__;
    }
}
