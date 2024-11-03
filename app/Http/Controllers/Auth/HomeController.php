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
        $project1 = Project::findOrFail(1);
        $project2 = Project::findOrFail(2);
        $project3 = Project::findOrFail(3);
        $project4 = Project::findOrFail(4);
        $project5 = Project::findOrFail(5);
        $project6 = Project::findOrFail(6);
        $testimonials = Testimonial::all();
        return view(
            'index',
            compact(
                'slider',
                'products',
                'projects',
                'project1',
                'project2',
                'project3',
                'project4',
                'project5',
                'project6',
                'testimonials'
            )
        );
    }
}
