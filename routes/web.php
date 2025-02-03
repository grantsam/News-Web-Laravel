<?php

use App\Models\news;
use App\Models\posts;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/news/{id}', [PostsController::class, 'show'])->name('news.show');

Route::get('/foto-video', function () {
    return view('foto-video');
});

Route::get('/sitemap', function () {
    return view('sitemap');
});