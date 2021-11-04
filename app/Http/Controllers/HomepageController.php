<?php

namespace App\Http\Controllers;
use App\Field;
use App\Post;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $fields = Field::all();
        $posts = Post::orderBy('created_at', 'ASC')->paginate(5);
        return view('homepage', compact('posts', 'fields'));
    }
}

