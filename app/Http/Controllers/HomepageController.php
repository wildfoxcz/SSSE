<?php

namespace App\Http\Controllers;
use App\Field;
use App\Post;
use App\Review;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $fields = Field::all();
        $posts = Post::orderBy('created_at', 'ASC')->paginate(5);
        $reviews = Review::all();
        return view('homepage', compact('posts', 'fields', 'reviews'));
    }
}

