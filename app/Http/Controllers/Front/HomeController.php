<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $slides = Slider::get();
        $features = Feature::get();
        $posts = Post::orderBy('id', 'desc')->limit(3)->get();
        return view('front.home', compact('slides', 'features', 'posts'));
    }
}
