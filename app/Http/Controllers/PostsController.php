<?php

namespace App\Http\Controllers;

use App\Models\Posts; // Corrected model name
use Illuminate\Http\Request;
use App\Services\UnsplashService;

use function Laravel\Prompts\search;

class PostsController extends Controller
{
    protected $unsplashService;

    public function __construct(UnsplashService $unsplashService)
    {
        $this->unsplashService = $unsplashService;
    }

    public function index(Request $request)
    {

        $query = Posts::query(); // Ambil semua data dari model Post

        if ($request->has('search') && !empty($request->search)) {
            $query->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('content', 'like', '%' . $request->search . '%');
        }

        $posts = $query->paginate(6); // Paginate 10 hasil per halaman
        return view('news.index', compact('posts'));
    }


    public function show($slug)
    {
        $post = Posts::where('slug', $slug)->firstOrFail();
        $photo = null;

        if (!$post->image) {
            $categoryName = optional($post->category)->name ?? 'news';
            $photo = $this->unsplashService->getRandomImage();
        }

        return view('news.post', compact('post', 'photo'));
    }
}
