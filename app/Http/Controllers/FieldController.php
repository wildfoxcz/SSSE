<?php

namespace App\Http\Controllers;

use App\Field;

class FieldController extends Controller
{
    public function show()//show(Field $field)
    {
        $field = Field::first();
        return view('fields.show', compact('field'));
    }
}
