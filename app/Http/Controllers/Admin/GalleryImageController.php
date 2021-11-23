<?php

namespace App\Http\Controllers\Admin;

use App\Partner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use App\GalleryImage;

class GalleryImageController extends Controller
{
    public function index()
    {
        $galleryImages = GalleryImage::all();

        return view('admin.gallery_images.index', compact('galleryImages'));
    }

    public function edit(GalleryImage $galleryImage)
    {
        return view('admin.gallery_images.edit_or_create', compact('galleryImage'));
    }


    public function update(GalleryImage $galleryImage)
    {
        $this->store_or_update($galleryImage);

        return redirect()->route('admin.gallery_images.index');
    }

    public function create()
    {
        return view('admin.gallery_images.edit_or_create');
    }

    public function store()
    {
        $galleryImage = $this->store_or_update();

        return redirect()->route('admin.gallery_images.index');
    }


    private function store_or_update(GalleryImage $galleryImage = null)
    {


        if(is_null($galleryImage))
            $galleryImage = new GalleryImage;


        $rules = [ 'image' => ''];

        if(request()->hasFile('image')){
            $image_tmp = request()->file('image');
            if($image_tmp->isValid()){
                // Get Image Extension
                $extension = $image_tmp->getClientOriginalExtension();
                // Generate new image name
                $imageNameBase = rand(111,99999);   // @todo timestamp would be better
                $imageName = $imageNameBase.'.'.$extension;
                $imagePath = 'images/gallery_images/'.$imageName;
                // Upload the image
                Image::make($image_tmp)->save($imagePath);
                $galleryImage->image = $imageName;

                $imageName = $imageNameBase.'_thumbnail.'.$extension;
                $imagePath = 'images/gallery_images/'.$imageName;
                Image::make($image_tmp)->resize(390, 390, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->save($imagePath);
                $galleryImage->thumbnail = $imageName;

            }
        }

        $properties = array_keys($rules);
        foreach(array_intersect_key(request()->input(), array_flip($properties)) as $property => $value)
        {
            $galleryImage->$property = $value;
        }

        $galleryImage->save();

        return $galleryImage;
    }

}
