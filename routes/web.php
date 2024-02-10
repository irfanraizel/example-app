<?php

use App\Models\Post;
use App\Models\About;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

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

Route::get('/about', [AboutController::class, 'aboutList']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

// Halaman Single Post
Route::get('posts/{slug}', [PostController::class, 'show']);

// Halaman Single About
Route::get('about/{slug}', [AboutController::class, 'aboutSingle']);