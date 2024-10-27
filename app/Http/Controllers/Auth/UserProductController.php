<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class UserProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::paginate(3);
        return view('shop', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Product::findOrFail($id);
        // $data = Product::with('comments')->findOrFail($id);
        return view('product', compact('data'));
    }

}
