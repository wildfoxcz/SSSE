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
            'content' => 'required|string',
            // @todo 'image' => '',

        ];

        $this->validate(request(), $rules);

        $properties = array_keys($rules);
        foreach(array_intersect_key(request()->input(), array_flip($properties)) as $property => $value)
        {
            $field->$property = $value;
        }

        $field->save();

        return $field;
    }

}
