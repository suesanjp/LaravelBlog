<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.index', [
            'posts' => $posts,
        ]);
    }
    public function show($id)
    {
        $today = date('Y-m-d');
        $post = Post::find($id);

        return view('posts.show', [
            'today' => $today,
            'post' => $post,
        ]);
    }

    public function create()
    {
        $post = new Post();
        $data = ['post' => $post];
        return view('posts.create', $data);
    }
}