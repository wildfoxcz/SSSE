<?php

namespace App\Http\Controllers;
use App\Field;
use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show(Page $page)
    {
        return view('pages.show', compact('page'));
    }
}

