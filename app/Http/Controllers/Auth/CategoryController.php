<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $products = Product::paginate(3);
    //     return view('shop', compact('products'));
    // }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $product = Product::findOrFail($id);
        // dd($product);
        $category = Category::with('products')->findOrFail($id);
        return view('category', compact('category'));
    }
}
