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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('admin_login');
});
Route::get('/add', function () {
    $posts=App\post::latest()->get();
    return view('add_post',["posts"=>$posts]);
});
Route::get("/add","PostController@index");
Route::get("/add/create","PostController@create");
Route::post("/add","PostController@store");
Route::get("/add/{add_post}","PostController@store");



Route::get('/view', function () {
    return view('view_user');
});
