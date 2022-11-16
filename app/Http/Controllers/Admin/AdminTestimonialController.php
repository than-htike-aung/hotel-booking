<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class AdminTestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::get();
        return view('admin.testimonial_view', compact('testimonials'));
    }

    public function add()
    {
        return view('admin.testimonial_add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'image|mimes:jpg, jpeg,png,gif',
            'name' => 'required',
            'designation'  => 'required',
            'comment'   => 'required',
        ]);
        $ext = $request->file('photo')->extension();
        $file_name = time() . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $file_name);

        $obj = new Testimonial();
        $obj->photo = $file_name;
        $obj->name = $request->name;
        $obj->designation = $request->designation;
        $obj->comment = $request->comment;
        $obj->save();

        return redirect()->route('admin.testimonial.view')->with('success', 'Testimonial inserted is successfully');
    }

    public function edit($id)
    {
        $testimonial_data = Testimonial::where('id', $id)->first();
        return view('admin.testimonial_edit', compact('testimonial_data'));
    }

    public function update(Request $request, $id)
    {
        $obj = Testimonial::where('id', $id)->first();
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

        $obj->name = $request->name;
        $obj->designation = $request->designation;
        $obj->comment = $request->comment;
        $obj->update();
        return redirect()->route('admin.testimonial.view')->with('success', 'Testimonial updated is successfully');
    }

    public function delete($id)
    {
        $single_data = Testimonial::where('id', $id)->first();
        unlink(public_path('uploads/' . $single_data->photo));
        $single_data->delete();
        return redirect()->route('admin.testimonial.view')->with('success', 'Testimonial deleted is successfully');
    }
}
