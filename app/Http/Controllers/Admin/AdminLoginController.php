<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\Websitemail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminLoginController extends Controller
{
    public function index()
    {
        $pass = Hash::make('123123123');
        // dd($pass);
        return view('admin.login');
    }

    public function forget_password()
    {
        return view('admin.forget_password');
    }

    public function forget_password_submit(Request $request)
    {

        $request->validate(['email' => 'required|email']);

        $admin_data = Admin::where('email', $request->email)->first();

        if (!$admin_data) {
            return redirect()->back()->with('error', 'This email is not found');
        }
        $token = hash('sha256', time());
        $admin_data->token = $token;
        $admin_data->update();

        $reset_link = url('admin/reset-password/' . $token . '/' . $request->email);
        $subject = 'Reset Password';
        $message = 'Please click on the following link: <br>';
        $message .= '<a href="' . $reset_link . '">Click here</a>';

        Mail::to($request->email)->send(new Websitemail($subject, $message));

        return redirect()->route('admin.login')
            ->with('success', 'Please check your email and follow the steps there');
    }


    public function login_submit(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required'
            ],
            [
                'email.required' => 'email is needed'
            ]
        );

        $credential = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::guard('admin')->attempt($credential)) {
            return redirect()->route('admin.home');
        } else {
            return redirect()->route('admin.login')->with('error', 'Information is not correct');
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function reset_password($token, $email)
    {
        $admin_data = Admin::where('token', $token)->where('email', $email)->first();
        if (!$admin_data) {
            return redirect()->route('admin.login');
        }
        return view('admin.reset_password', compact('token', 'email'));
    }

    public function reset_password_submit(Request $request)
    {
        $request->validate([

            'password' => 'required',
            'retype_password' => 'required|same:password'

        ]);

        $admin_data = Admin::where('token', $request->token)
            ->where('email', $request->email)->first();

        $admin_data->password = Hash::make($request->password);
        $admin_data->token = "";
        $admin_data->update();



        return redirect()->route('admin.login')->with('success', 'Password Reset is successfully');
    }
}
