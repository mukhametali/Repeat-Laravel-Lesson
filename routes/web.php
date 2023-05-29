<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','HomeController@index')->name('home');
Route::get('/create','HomeController@create')->name('posts.create');
Route::post('/','HomeController@store')->name('posts.store');


Route::get('/page/about','PageController@show')->name('page.about');

//Route::get('/send','ContactController@send');

Route::match(['get', 'post'],'/send','ContactController@send');

Route::get('/register','UserController@create')->name('register.create');
Route::post('/register','UserController@store')->name('register.store');

Route::get('/login','UserController@loginForm')->name('login.create');
Route::post('/login','UserController@login')->name('login.store');
Route::get('/logout','UserController@logout')->name('logout');

Route::get('/admin','Admin\MainController@index');








