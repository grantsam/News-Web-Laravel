<?php

use App\Models\news;
use App\Models\posts;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UnsplashController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;


Route::get('/unsplash-image/{category}', [HomeController::class, 'getRandomUnsplashImage'])
    ->name('get.unsplash.image');
    
Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

route::get('/foto-video', [FotoController::class, 'index']);

Route::get('/news', [PostsController::class, 'index'])->name('news.index'); 

Route::get('/news/{slug}', [PostsController::class, 'show'])->name('news.post');

Route::get('/foto-video', [FotoController::class, 'index']);

Route::get('/sitemap', function () {
    return view('sitemap');
});

Route::get('/register', [RegisterController::class, 'index']); 
Route::post('/register', [RegisterController::class, 'store']); 

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);     
Route::post('/logout', [LoginController::class, 'logout']);     

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class,'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except(['show'])->middleware('auth');