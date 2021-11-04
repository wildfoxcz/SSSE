<?php

namespace App\Http\Controllers;

use App\Field;

class FieldController extends Controller
{
    public function show(Field $field)
    {
        return view('fields.show', compact('field'));
    }
}
