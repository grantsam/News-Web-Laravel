<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Services\UnsplashService;

class HomeController extends Controller
{
    protected $unsplashService;

    public function __construct(UnsplashService $unsplashService)
    {
        $this->unsplashService = $unsplashService;
    }

    public function index()
    {
        $majorBreakingStory = Posts::where('category_id', 1)->latest()->first();
        $technologyBusinessNews = Posts::where('category_id', 2)->latest()->take(2)->get();
        $subMainNews = Posts::where('category_id', 3)->latest()->take(3)->get();
        $trendingNews = Posts::whereIn('category_id', [1, 2, 3])->latest()->take(5)->get();

        // Get a random image
        $photoData = $this->unsplashService->getRandomImage();

        return view('home', compact(
            'majorBreakingStory',
            'technologyBusinessNews',
            'subMainNews',
            'trendingNews',
            'photoData'
        ));
    }
}
