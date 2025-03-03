<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use App\Services\UnsplashService;
class DashboardPostController extends Controller
{
    protected $unsplashService;
    
    public function __construct(UnsplashService $unsplashService)
    {
        $this->unsplashService = $unsplashService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Posts::where('author', Auth::user()->name)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts,slug',
            'category_id' => 'required',
            'image' =>'image|file|max:10240',
            'content' => 'required',
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        } 

        $validatedData['user_id'] = Auth::id();
        $validatedData['author'] = Auth::user()->name;
        $validatedData['content'] = strip_tags($request->content);
        Posts::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New post has been added!');

        // // Return JSON untuk debugging
        // return response()->json([
        //     'message' => 'Data berhasil diterima',
        //     'data' => $validatedData
        // ]);
    }

    /**
     * Display the specified resource.
     */


    public function show(Posts $post)
    {
        // dd($post); // Debugging - Check if data is available
        $photo = [];
        
        if (!$post->image) {
            $categoryName = $post->category->name ?? 'news';
            $photo = $this->unsplashService->getRandomImage($categoryName);
        }
        
        return view('dashboard.posts.show', compact('post', 'photo'));

    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Posts $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Posts $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'content' => 'required',
            
            
        ];
        
        if($request->slug != $post->slug)
        {
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);
        
        $validatedData['user_id'] = Auth::id();
        $validatedData['author'] = Auth::user()->name;
        $validatedData['content'] = strip_tags($request->content);
        Posts::where('id', $post->id)
            ->update($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New post has been updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Posts $post)
    {
        $post->delete();
        return redirect('/dashboard/posts')->with('success', 'Post has been deleted!');
    }


    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Posts::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
