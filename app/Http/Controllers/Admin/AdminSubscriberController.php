<?php

namespace App\Http\Controllers\Admin;

use App\Mail\Websitemail;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class AdminSubscriberController extends Controller
{
    public function show(){
        $all_subscribers = Subscribe::where('status', 1)->get();
        return view('admin.subscriber_show', compact('all_subscribers'));
    }

    public function send_email(){
        return view('admin.subscriber_send_email');
    }
    public function send_email_submit(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'message' => 'required'
        ]);
        $subject = $request->subject;
        $message = $request->message;

        $all_subscribers = Subscribe::where('status', 1)->get();

        foreach($all_subscribers as $item){
            Mail::to($item->email)->send(new Websitemail($subject,$message));
        }
        return redirect()->back()->with('success', 'Email is send successfully');

    }
}
 