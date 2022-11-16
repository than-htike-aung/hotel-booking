<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class AdminSliderController extends Controller
{
  public function index()
  {
    $slides = Slider::get();
    return view('admin.slide_view', compact('slides'));
  }

  public function add()
  {
    return view('admin.slide_add');
  }

  public function store(Request $request)
  {
    $request->validate([
      'photo' => 'image|mimes:jpg, jpeg,png,gif'
    ]);
    $ext = $request->file('photo')->extension();
    $file_name = time() . '.' . $ext;
    $request->file('photo')->move(public_path('uploads/'), $file_name);

    $obj = new Slider();
    $obj->photo = $file_name;
    $obj->heading = $request->heading;
    $obj->text = $request->text;
    $obj->button_text = $request->button_text;
    $obj->button_url = $request->button_url;
    $obj->save();

    return redirect()->route('admin.slide.view')->with('success', 'Slider inserted is successfully');
  }

  public function edit($id)
  {
    $slide_data = Slider::where('id', $id)->first();
    return view('admin.slide_edit', compact('slide_data'));
  }

  public function update(Request $request, $id)
  {
    $obj = Slider::where('id', $id)->first();
    if ($request->hasFile('photo')) {

      $request->validate([
        'photo' => 'image|mimes:jpg, jpeg,png,gif'
      ]);
      unlink(public_path('uploads/' . $obj->photo));
      $ext = $request->file('photo')->extension();
      $final_name = time() . '.' . $ext;
      $request->file('photo')->move(public_path('uploads/'), $final_name);
      $obj->photo = $final_name;
    }


    $obj->heading = $request->heading;
    $obj->text = $request->text;
    $obj->button_text = $request->button_text;
    $obj->button_url = $request->button_url;
    $obj->update();
    return redirect()->route('admin.slide.view')->with('success', 'Slider inserted is successfully');
  }

  public function delete($id)
  {
    $single_data = Slider::where('id', $id)->first();
    unlink(public_path('uploads/' . $single_data->photo));
    $single_data->delete();
    return redirect()->route('admin.slide.view')->with('success', 'Slider deleted is successfully');
  }
}
