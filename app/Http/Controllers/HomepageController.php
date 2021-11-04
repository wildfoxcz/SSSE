<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'ASC')->paginate(5);
        return view('layouts.web', compact('posts'));
    }
}

