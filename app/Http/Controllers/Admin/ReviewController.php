<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use App\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();

        return view('admin.reviews.index', compact('reviews'));
    }

    public function edit(Review $review)
    {
        return view('admin.reviews.edit_or_create', compact('review'));
    }


    public function update(Review $review)
    {
        $this->store_or_update($review);

        return redirect()->route('admin.reviews.index');
    }

    public function create()
    {
        return view('admin.reviews.edit_or_create');
    }

    public function store()
    {
        $review = $this->store_or_update();

        return redirect()->route('admin.reviews.index');
    }


    private function store_or_update(Review $review = null)
    {
        if(is_null($review))
            $review = new Review;

        $rules = [
            'name' => 'required|string',
            'subtitle' => 'required|string',
            'content' => 'required|string',
            // @todo 'image' => '',

        ];

        $this->validate(request(), $rules);

        if(request()->hasFile('image')){
            $image_tmp = request()->file('image');
            if($image_tmp->isValid()){
                // Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate new image name
                $imageName  = rand(111,99999).'.'.$extension;   // @todo timestamp would be better
                $imagePath = 'images/reviews/'.$imageName;
                // Upload the image
                Image::make($image_tmp)->save($imagePath);
                $review->image = $imageName;
            }
        }

        $properties = array_keys($rules);
        foreach(array_intersect_key(request()->input(), array_flip($properties)) as $property => $value)
        {
            $review->$property = $value;
        }

        $review->save();

        return $review;
    }

}
