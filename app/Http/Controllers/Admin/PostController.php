<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit_or_create', compact('post'));
    }


    public function update(Post $post)
    {
        $this->store_or_update($post);

        return redirect()->route('admin.posts.index');
    }

    public function create()
    {
        return view('admin.posts.edit_or_create');
    }

    public function store()
    {
        $post = $this->store_or_update();

        return redirect()->route('admin.posts.index');
    }


    private function store_or_update(Post $post = null)
    {
        if(is_null($post))
            $post = new Post;

        $rules = [
            'title' => 'required|string',
            'short_desc' => 'required|string',
            'description' => 'required|string',
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
                $imagePath = 'images/posts/'.$imageName;
                // Upload the image
                Image::make($image_tmp)->save($imagePath);
                $post->image = $imageName;
            }
        }

        $properties = array_keys($rules);
        foreach(array_intersect_key(request()->input(), array_flip($properties)) as $property => $value)
        {
            $post->$property = $value;
        }

        $post->user_id = auth()->id();

        $post->save();

        return $post;
    }

}
