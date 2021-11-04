<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use App\Field;

class FieldController extends Controller
{
    public function index()
    {
        $fields = Field::all();

        return view('admin.fields.index', compact('fields'));
    }

    public function edit(Field $field)
    {
        return view('admin.fields.edit_or_create', compact('field'));
    }


    public function update(Field $field)
    {
        $this->store_or_update($field);

        return redirect()->route('admin.fields.index');
    }

    public function create()
    {
        return view('admin.fields.edit_or_create');
    }

    public function store()
    {
        $field = $this->store_or_update();

        return redirect()->route('admin.fields.index');
    }


    private function store_or_update(Field $field = null)
    {


        if(is_null($field))
            $field = new Field;


        $rules = [
            'name' => 'required|string',
            'description' => 'required|string',
            'reasons' => 'required|string',
            'where_can' => 'required|string',
            'learn_plan' => 'required|string',
            'what_can' => 'required|string',
            'image_1' => 'image',
            'image_2' => 'image',
            'image_3' => 'image',
            'join_url' => 'required|string',
            'about_url' => 'required|string',
            'basic_info' => 'required|string',
            // @todo 'image' => '',

        ];

        $this->validate(request(), $rules);

        if(request()->hasFile('image_1')){
            $image_tmp1 = request()->file('image_1');
            if($image_tmp1->isValid()){
                // Get Image Extension
                $extension1 = $image_tmp1->getClientOriginalExtension();
                // Generate new image name
                $imageName1  = rand(111,99999).'.'.$extension1;   // @todo timestamp would be better
                $imagePath1 = 'images/fields/'.$imageName1;
                // Upload the image
                Image::make($image_tmp1)->save($imagePath1);
                $field->image_1 = $imageName1;
            }
        }

        if(request()->hasFile('image_2')){
            $image_tmp2 = request()->file('image_2');
            if($image_tmp2->isValid()){
                // Get Image Extension
                $extension2 = $image_tmp2->getClientOriginalExtension();
                // Generate new image name
                $imageName2  = rand(111,99999).'.'.$extension2;   // @todo timestamp would be better
                $imagePath2 = 'images/fields/'.$imageName2;
                // Upload the image
                Image::make($image_tmp2)->save($imagePath2);
                $field->image_2 = $imageName2;
            }
        }

        if(request()->hasFile('image_3')){
            $image_tmp3 = request()->file('image_3');
            if($image_tmp3->isValid()){
                // Get Image Extension
                $extension3 = $image_tmp3->getClientOriginalExtension();
                // Generate new image name
                $imageName3  = rand(111,99999).'.'.$extension3;   // @todo timestamp would be better
                $imagePath3 = 'images/fields/'.$imageName3;
                // Upload the image
                Image::make($image_tmp3)->save($imagePath3);
                $field->image_3 = $imageName3;
            }
        }

        $properties = array_keys($rules);
        foreach(array_intersect_key(request()->input(), array_flip($properties)) as $property => $value)
        {
            $field->$property = $value;
        }


        $field->save();
        dd($field);
        return $field;
    }

}
