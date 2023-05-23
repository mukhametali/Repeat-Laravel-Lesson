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
//        DB::beginTransaction();
//        try {
//            DB::update("UPDATE posts SET created_at = ? WHERE created_at IS NULL", [NOW()]);
//            DB::update("UPDATE posts SET updated_at = ? WHERE updated_at IS NULL", [NOW()]);
//            DB::commit();
//        } catch (\Exception $exception) {
//            DB::rollBack();
//            echo $exception->getMessage();
//        }


//
//        $posts = DB::select("SELECT * FROM posts ");
//        return $posts;
//
//          $data = DB::table('country')->get();
//          $data = DB::table('country')->limit(10)->get();
//          $data = DB::table('country')->select('Code','Name')->limit(10)->get();
//          $data = DB::table('country')->select('Code','Name')->first();
//          $data = DB::table('country')->select('Code','Name')->orderBy('Code','desc')->first();
////          $data = DB::table('city')->select('ID','Name')->find(2);
//          $data = DB::table('city')->select('ID','Name')->where([
//              ['id', '>', 1],
//              ['id', '<', 6],
//          ])->get();

//        $data = DB::table('city')->where('id', '<', 5)->value('Name');
//        $data = DB::table('country')->limit(12)->pluck('Name','code');
//        $data = DB::table('country')->count();
//        $data = DB::table('country')->max('Population');
//        $data = DB::table('country')->min('Population');
//        $data = DB::table('country')->sum('Population');
//        $data = DB::table('country')->avg('Population');

//          $data = DB::table('city')->select('CountryCode')->distinct()->get();
          $cities = DB::table('city')->select('city.ID','city.Name as city_name', 'country.Code', 'country.Name as country_name')->limit(10)
          ->join('country','city.CountryCode','=','country.Code')
          ->orderBy('city.ID')
          ->get();
        dd ($cities);

          return view('home');


    }

    public function test()
    {
        return __METHOD__;
    }
}
