<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function about(){
        $page_data = Page::where('id', 1)->first();
        return view('admin.page_about', compact('page_data'));
    }

    public function about_update(Request $request){
        $obj = Page::where('id',1)->first();
        $obj->about_heading = $request->about_heading;
        $obj->about_content = $request->about_content;
        $obj->about_status = $request->about_stauts;
        $obj->update();
        return redirect()->back()->with('success', 'Data is updated successfully');
    }

    public function terms(){
        $term_data = Page::where('id', 1)->first();
        return view('admin.page_term', compact('term_data'));
    }

    public function terms_update(Request $request){
        $obj = Page::where('id',1)->first();
        $obj->terms_heading = $request->terms_heading;
        $obj->terms_content = $request->terms_content;
        $obj->terms_status = $request->terms_status;
        $obj->update();
        return redirect()->back()->with('success', 'Term Data is updated successfully');
    }

    public function privacy(){
        $privacy_data = Page::where('id', 1)->first();
        return view('admin.page_privacy', compact('privacy_data'));
    }

    public function privacy_update(Request $request){
        $obj = Page::where('id',1)->first();
        $obj->privacy_heading = $request->privacy_heading;
        $obj->privacy_content = $request->privacy_content;
        $obj->privacy_status = $request->privacy_status;
        $obj->update();
        return redirect()->back()->with('success', 'Privacy Data is updated successfully');
    }

    public function contact(){
        $contact_data = Page::where('id', 1)->first();
        return view('admin.page_contact', compact('contact_data'));
    }

    public function contact_update(Request $request){
        $obj = Page::where('id',1)->first();
        $obj->contact_heading = $request->contact_heading;
        $obj->contact_map = $request->contact_map;
        $obj->contact_status = $request->contact_status;
        $obj->update();
        return redirect()->back()->with('success', 'Contact Data is updated successfully');
    }

    public function photo_gallery(){
        $photo_gallery = Page::where('id', 1)->first();
        return view('admin.page_photo_gallery', compact('photo_gallery'));
    }

    public function photo_gallery_update(Request $request){
        $obj = Page::where('id',1)->first();
        $obj->photo_gallery_heading = $request->photo_gallery_heading;
      
        $obj->photo_gallery_status = $request->photo_gallery_status;
        $obj->update();
        return redirect()->back()->with('success', 'Photo gallery is updated successfully');
    }

    public function video_gallery(){
        $video_gallery = Page::where('id', 1)->first();
        return view('admin.page_video_gallery', compact('video_gallery'));
    }

    public function video_gallery_update(Request $request){
        $obj = Page::where('id',1)->first();
        $obj->video_gallery_heading = $request->video_gallery_heading;
      
        $obj->video_gallery_status = $request->video_gallery_status;
        $obj->update();
        return redirect()->back()->with('success', 'Video gallery is updated successfully');
    }

    public function faq(){
        $faq = Page::where('id', 1)->first();
        return view('admin.page_faq', compact('faq'));
    }

    public function faq_update(Request $request){
        $obj = Page::where('id',1)->first();
        $obj->faq_heading = $request->faq_heading;
      
        $obj->faq_status = $request->faq_status;
        $obj->update();
        return redirect()->back()->with('success', 'FAQ is updated successfully');
    }

    public function blog(){
        $blog = Page::where('id', 1)->first();
        return view('admin.page_blog', compact('blog'));
    }

    public function blog_update(Request $request){
        $obj = Page::where('id',1)->first();
        $obj->blog_heading = $request->blog_heading;
      
        $obj->blog_status = $request->blog_status;
        $obj->update();
        return redirect()->back()->with('success', 'Blo is updated successfully');
    }

    public function cart(){
        $cart = Page::where('id', 1)->first();
        return view('admin.page_cart', compact('cart'));
    }

    public function cart_update(Request $request){
        $obj = Page::where('id',1)->first();
        $obj->cart_heading = $request->cart_heading;
        $obj->cart_status = $request->cart_status;

        $obj->update();
        return redirect()->back()->with('success', 'cart is updated successfully');
    }

    public function checkout(){
        $checkout = Page::where('id', 1)->first();
        return view('admin.page_checkout', compact('checkout'));
    }

    public function checkout_update(Request $request){
        $obj = Page::where('id',1)->first();
        $obj->checkout_heading = $request->checkout_heading;
        $obj->checkout_status = $request->checkout_status;
        
        $obj->update();
        return redirect()->back()->with('success', 'checkout is updated successfully');
    }

    public function payment(){
        $payment = Page::where('id', 1)->first();
        return view('admin.page_payment', compact('payment'));
    }

    public function payment_update(Request $request){
        $obj = Page::where('id',1)->first();
        $obj->payment_heading = $request->payment_heading;
        
        $obj->update();
        return redirect()->back()->with('success', 'Payment is updated successfully');
    }

    public function signup(){
        $signup = Page::where('id', 1)->first();
        return view('admin.page_signup', compact('signup'));
    }

    public function signup_update(Request $request){
        $obj = Page::where('id',1)->first();
        $obj->signup_heading = $request->signup_heading;
        $obj->signup_status = $request->signup_status;
        
        $obj->update();
        return redirect()->back()->with('success', 'signup is updated successfully');
    }
    public function signin(){
        $signin = Page::where('id', 1)->first();
        return view('admin.page_signin', compact('signin'));
    }

    public function signin_update(Request $request){
        $obj = Page::where('id',1)->first();
        $obj->signin_heading = $request->signin_heading;
        $obj->signin_status = $request->signin_status;
        
        $obj->update();
        return redirect()->back()->with('success', 'signin is updated successfully');
    }

}
