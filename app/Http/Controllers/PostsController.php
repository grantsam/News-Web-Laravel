<?php
namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($id)
    {
        $post = Posts::findOrFail($id); // Secure way to find or return 404 if not found
        return view('news', compact('posts'));
    }
}
