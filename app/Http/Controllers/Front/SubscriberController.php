<?php

namespace App\Http\Controllers\Front;

use App\Models\Admin;
use App\Mail\Websitemail;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{
    public function send_email(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
        ]);
      

        if(!$validator->passes()) {
            return response()->json(['code'=>0,'error_message'=>$validator->errors()->toArray()]);
        } else {

            $token = hash('sha256', time());
            $obj = new Subscribe();
            $obj->email = $request->email;
            $obj->token = $token;
            $obj->status = 0;
            $obj->save();

            $verification_link = url('subscriber/verify/'.$request->email.'/'.$token);
              
            
              $subject = 'Subscriber Verification';
              $message = 'Please click on the link below to confirm subscription: <br>';
              $message .= '<a href="'.$verification_link.'">';
              $message .= $verification_link;
              $message .= '</a>';
  
             
  
              FacadesMail::to($request->email)->send(new Websitemail($subject,$message));
  
            return response()->json(['code'=>1, 'success_message'=>'Pls check your email to confirm subscription.']);
        }
    }

    public function verify($email, $token){
        $subcriber_data = Subscribe::where('email', $email)->where('token', $token)->first();
            if($subcriber_data){
                $subcriber_data->token = '';
                $subcriber_data->status = 1;
                $subcriber_data->update();
                return redirect()->route('home')->with('success', 'Your subscription is verified successfully!');
            }else{
                return redirect()->route('home');
            }
    }
}
