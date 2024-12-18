<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Product;
use App\Models\Project;
use App\Models\Q_A;
use App\Models\Slider;
use App\Models\Testimonial;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $slider = Slider::all();
        $categories = Category::take(2)->get();
        $blogs = Blog::take(3)->get();
        $projects = Project::all();
        $project1 = Project::findOrFail(1);
        $project2 = Project::findOrFail(2);
        $project3 = Project::findOrFail(3);
        $project4 = Project::findOrFail(4);
        $project5 = Project::findOrFail(5);
        $project6 = Project::findOrFail(6);
        $testimonials = Testimonial::all();
        $q_a1 = Q_A::findOrFail(1);
        $q_a2 = Q_A::findOrFail(2);
        $q_a3 = Q_A::findOrFail(3);
        $q_a4 = Q_A::findOrFail(4);
        $blogDate = Blog::first();
        $createdDate = Carbon::parse($blogDate->created_at);
        $day = $createdDate->day;
        $month = $createdDate->format('F');
        return view(
            'home',
            compact(
                'slider',
                'categories',
                'projects',
                'project1',
                'project2',
                'project3',
                'project4',
                'project5',
                'project6',
                'testimonials',
                'q_a1',
                'q_a2',
                'q_a3',
                'q_a4',
                'blogs',
                'day',
                'month',
            )
        );
    }
}
