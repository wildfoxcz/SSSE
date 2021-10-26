<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use App\Page;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();

        return view('admin.pages.index', compact('pages'));
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit_or_create', compact('page'));
    }


    public function update(Page $page)
    {
        $this->store_or_update($page);

        return redirect()->route('admin.pages.index');
    }

    public function create()
    {
        return view('admin.pages.edit_or_create');
    }

    public function store()
    {
        $page = $this->store_or_update();

        return redirect()->route('admin.pages.index');
    }


    private function store_or_update(Page $page = null)
    {
        if(is_null($page))
            $page = new Page;

        $rules = [
            'name' => 'required|string',
            'content' => 'required|string',
            // @todo 'image' => '',

        ];

        $this->validate(request(), $rules);

        $properties = array_keys($rules);
        foreach(array_intersect_key(request()->input(), array_flip($properties)) as $property => $value)
        {
            $page->$property = $value;
        }

        $page->is_active = "1";
        $page->save();

        return $page;
    }

}
