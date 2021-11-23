<?php

namespace App\Http\Controllers;
use App\Field;
use App\GalleryImage;
use App\Post;
use Illuminate\Http\Request;

class GalleryImageController extends Controller
{
    public function index()
    {
        $galleryImages = GalleryImage::all();
        return view('gallery_images.index', compact('galleryImages'));
    }
}

