<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\posts;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('home');
});






Route::get('/about', function () {
    return view('about', [
    "name" => "T.Rifal Aulia",
    "email" => "trifalaulia@gmail.com",
    "image" => "kominkraf.jpeg"
    ]);
});



Route::get('/posts', function () {


    return view('posts',[
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});



//halaman single post
Route::get('posts/{slug}', function($slug){
  
    

    return view('post', [ 
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});