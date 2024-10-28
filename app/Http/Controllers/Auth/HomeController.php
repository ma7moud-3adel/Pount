<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Project;
use App\Models\Slider;
use App\Models\Testimonial;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $slider = Slider::all();
        $products = Product::take(2)->get();
        $projects = Project::all();
        $testimonials = Testimonial::all();
        return view('index', compact('slider', 'products', 'projects', 'testimonials'));
    }
}
