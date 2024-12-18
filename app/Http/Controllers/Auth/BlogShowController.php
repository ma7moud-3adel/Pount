<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogShowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Blog::all();
        return view('blog', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        $createdDate = Carbon::parse($blog->created_at);
        $day = $createdDate->day;
        $month = $createdDate->format('F');
        $year = $createdDate->year;
        $fullDate = $createdDate->format('F j, Y');
        return view('blog-single', compact('blog', 'day', 'month', 'fullDate'));
    }
}
