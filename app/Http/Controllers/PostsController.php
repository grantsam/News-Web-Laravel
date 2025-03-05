<?php

namespace App\Http\Controllers;

use App\Models\Posts; // Corrected model name
use Illuminate\Http\Request;
use App\Services\UnsplashService;

class PostsController extends Controller
{
    protected $unsplashService;

    public function __construct(UnsplashService $unsplashService)
    {
        $this->unsplashService = $unsplashService;
    }

    public function show($id)
    {
        $post = Posts::findOrFail($id);
        $photo = null;

        if (!$post->image) {
            $categoryName = optional($post->category)->name ?? 'news';
            $photo = $this->unsplashService->getRandomImage();
        }

        return view('news', compact('post', 'photo'));
    }
}
