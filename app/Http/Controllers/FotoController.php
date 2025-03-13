<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class FotoController extends Controller
{
    public function index(Request $request)
    {
        $majorBreakingStory = Posts::where('category_id', 1)->latest()->first();
        $technologyBusinessNews = Posts::where('category_id', 2)->latest()->take(2)->get();
        $subMainNews = Posts::where('category_id', 1)->latest()->take(3)->get();
        $trendingNews = Posts::whereIn('category_id', [1, 2, 3])->latest()->take(5)->get();
        
        return view('foto-video', compact( 'majorBreakingStory', 'technologyBusinessNews', 'subMainNews', 'trendingNews'));
    }
}
