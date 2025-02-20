<?php

use App\Models\news;
use App\Models\posts;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    $posts = Posts::all();
    return view('news');    
});

Route::get('/news/{id}', [PostsController::class, 'show'])->name('news.show');

Route::get('/foto-video', function () {
    return view('foto-video');
});

Route::get('/sitemap', function () {
    return view('sitemap');
});

Route::get('/register', [RegisterController::class, 'index']); 
Route::post('/register', [RegisterController::class, 'store']); 

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);     
Route::post('/logout', [LoginController::class, 'logout']);     

Route::get('/dashboard', [DashboardController::class, 'index']);