<?php

namespace App\Http\Controllers\Front;

use Mail;
use App\Models\Page;
use App\Mail\Websitemail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Facades\Validator;



class ContactController extends Controller
{
    public function index(){
        // $page_data = Page::where('id', 1)->first();
        // return view('front.contact', compact('page_data'));
        return view('front.contact');
    }
    public function send_email(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
      

        if(!$validator->passes()) {
            return response()->json(['code'=>0,'error_message'=>$validator->errors()->toArray()]);
        } else {

            //send email
              // Send email
              $subject = 'Contact form email';
              $message = 'Visitor email information: <br>';
              $message .= '<br>Name: '.$request->name;
              $message .= '<br>Email: '.$request->email;
              $message .= '<br>Message: '.$request->message;
  
              $admin_data = Admin::where('id',1)->first();
              $admin_email = $admin_data->email;
  
              FacadesMail::to($admin_email)->send(new Websitemail($subject,$message));
  
            return response()->json(['code'=>1, 'success_message'=>'Email is sent successfully.']);
        }
    }
}
