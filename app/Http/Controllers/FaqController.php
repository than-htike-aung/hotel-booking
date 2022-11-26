<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faq_all = Faq::get();
        return view('front.faq', compact('faq_all'));
    }
}
