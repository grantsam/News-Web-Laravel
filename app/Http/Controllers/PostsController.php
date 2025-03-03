<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Gunakan HTTP client Laravel
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
        $photo = [];
        
        if (!$post->image) {
            $categoryName = $post->category->name ?? 'news';
            $photo = $this->unsplashService->getRandomImage($categoryName);
        }
        
        return view('news', compact('post', 'photo'));
    }
}
