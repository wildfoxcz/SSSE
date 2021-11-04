<?php

namespace App\Http\Controllers;
use App\Field;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(Post $post)
    {
        $otherPosts = Post::where('id', '!=', $post->id)->latest()->take(3)->get();
        return view('posts.show', compact('post', 'otherPosts'));
    }
}

