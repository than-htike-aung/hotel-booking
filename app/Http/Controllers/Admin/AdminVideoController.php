<?php

namespace App\Http\Controllers\Admin;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminVideoController extends Controller
{
    public function index()
    {
        $videos  = Video::get();
        return view('admin.video_view', compact('videos'));
    }
    public function add()
    {
        return view('admin.video_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'video_id' => 'required'
        ]);
        $obj = new Video();
        $obj->video_id = $request->video_id;
        $obj->caption = $request->caption;
        $obj->save();
        return redirect()->route('admin.video.view')->with('success', 'Video inserted is successfully');
    }
    public function edit($id)
    {
        $video_data = Video::where('id', $id)->first();
        return view('admin.video_edit', compact('video_data'));
    }

    public function update(Request $request, $id)
    {
        $obj = Video::where('id', $id)->first();
        $obj->video_id = $request->video_id;
        $obj->caption = $request->caption;
        $obj->update();
        return redirect()->route('admin.video.view')->with('success', 'Video inserted is successfully');
    }

    public function delete($id)
    {
        $single_data = Video::where('id', $id)->first();

        $single_data->delete();
        return redirect()->route('admin.video.view')->with('success', 'Video deleted is successfully');
    }
}
