<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
//        $query = DB::insert("INSERT INTO posts (title, content, created_at, updated_at) VALUES (?, ?, ?, ?)", ['title 4', 'content 4', NOW(), NOW()]);

//        $query = DB::update("UPDATE posts SET created_at = :created_at, updated_at = :updated_at WHERE created_at IS NULL OR updated_at IS NULL", ['created_at' => NOW(), 'updated_at' => NOW()]);

//        DB::delete("DELETE FROM posts WHERE id = :id",['id'=>4]);
        DB::beginTransaction();
        try {
            DB::update("UPDATE posts SET created_at = ? WHERE created_at IS NULL", [NOW()]);
            DB::update("UPDATE posts SET updated_at = ? WHERE updated_at IS NULL", [NOW()]);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            echo $exception->getMessage();
        }


        $posts = DB::select("SELECT * FROM posts ");
        return $posts;

        return view('home');
    }

    public function test()
    {
        return __METHOD__;
    }
}
