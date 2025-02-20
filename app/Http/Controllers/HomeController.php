<?php
namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $majorBreakingStory = Posts::where('category_id', 1)->latest()->first(); // First record
        $technologyBusinessNews = Posts::where('category_id', 2)->latest()->take(2)->get();
        $subMainNews = Posts::where('category_id', 3)->latest()->take(3)->get();
        $trendingNews = Posts::where('category_id', 1||2||3)->latest()->take(5)->get();

        return view('home', compact('majorBreakingStory', 'technologyBusinessNews', 'subMainNews', 'trendingNews'));
    }
}
