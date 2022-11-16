<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPostController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        return view('admin.post_view', compact('posts'));
    }

    public function add()
    {
        return view('admin.post_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'image|mimes:jpg, jpeg,png,gif',
            'heading' => 'required',
            'short_content' => 'required',
            'content' => 'required',

        ]);
        $ext = $request->file('photo')->extension();
        $file_name = time() . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $file_name);

        $obj = new Post();
        $obj->photo = $file_name;
        $obj->heading = $request->heading;
        $obj->short_content = $request->short_content;
        $obj->content = $request->content;
        $obj->total_view = 1;

        $obj->save();

        return redirect()->route('admin.post.view')->with('success', 'Post inserted is successfully');
    }
}
