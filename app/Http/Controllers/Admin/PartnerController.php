<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use App\Partner;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();

        return view('admin.partners.index', compact('partners'));
    }

    public function edit(Partner $partner)
    {
        return view('admin.partners.edit_or_create', compact('partner'));
    }


    public function update(Partner $partner)
    {
        $this->store_or_update($partner);

        return redirect()->route('admin.partners.index');
    }

    public function create()
    {
        return view('admin.partners.edit_or_create');
    }

    public function store()
    {
        $partner = $this->store_or_update();

        return redirect()->route('admin.partners.index');
    }


    private function store_or_update(Partner $partner = null)
    {
        if(is_null($partner))
            $partner = new Partner;

        $rules = [
            'name' => 'required|string',
            'url' => 'required|string',
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
                $imagePath = 'images/partners/'.$imageName;
                // Upload the image
                Image::make($image_tmp)->save($imagePath);
                $partner->image = $imageName;
            }
        }

        $properties = array_keys($rules);
        foreach(array_intersect_key(request()->input(), array_flip($properties)) as $property => $value)
        {
            $partner->$property = $value;
        }

        $partner->save();

        return $partner;
    }

}
