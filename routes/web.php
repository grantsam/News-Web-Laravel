<?php

use App\Models\news;
use App\Models\posts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    return view('news',['posts' => posts::all()]);
});

Route::get('/foto-video', function () {
    return view('foto-video');
});

Route::get('/sitemap', function () {
    return view('sitemap');
});