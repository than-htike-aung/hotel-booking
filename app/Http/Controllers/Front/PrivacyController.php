<?php

namespace App\Http\Controllers\Front;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PrivacyController extends Controller
{
    public function index(){
        $page_data = Page::where('id', 1)->first();
        return view('front.privacy', compact('page_data'));
    }
}
