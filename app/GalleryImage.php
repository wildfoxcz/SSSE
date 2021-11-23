<?php

namespace App;

use App\PostCategory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class GalleryImage extends Model
{
    // --- Laravel settings ---
    protected $guarded = ['id'];
}
