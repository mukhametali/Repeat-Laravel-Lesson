<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        dump($_ENV['MY_SETTING']);
        dump($_ENV);
        return view('home');
    }

    public function test()
    {
        return __METHOD__;
    }
}
