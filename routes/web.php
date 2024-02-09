<?php

use App\Models\Post;
use App\Models\About;
use Illuminate\Support\Facades\Route;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "aboutList" => About::all()
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});

// Halaman Single Post
Route::get('posts/{slug}', function ($slug) {

    return view('post', [
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});

// Halaman Single About
Route::get('about/{slug}', function ($slug) {
    return view('aboutItem', [
        "title" => About::title($slug),
        "aboutItem" => About::find($slug)
    ]);
});