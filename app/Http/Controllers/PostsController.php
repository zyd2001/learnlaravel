<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    
    public function create()
    {
        return view('posts.create');
    }

    public function index()
    {
        // $posts = Post::latest();
        $archives = Post::archives();

        $posts = Post::filter(request(['month', 'year']));

        $posts = $posts->latest()->get();
        return view('posts.index', compact('posts', 'archives'));
    }
    
    public function store()
    {
        Post::create([
            'title' => request('title'),
            'body'  => request('body'),
            'user_id' => auth()->id()
        ]);
        return redirect('/');
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect()->home();
    }
}
