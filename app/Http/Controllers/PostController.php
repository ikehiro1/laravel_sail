<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view("post/create");
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->name = $request->name;
        $post->title = $request->title;
        $post->content = $request->content;

        $dir = 'sample';
        $request->file('image')->store('public/' . $dir,);
        
        $post->save();
        return redirect()->route('post.create');
    }

    public function index()
    {
        $posts = Post::all();
        return view("posts.index", compact("posts"));
    }
    
}
