<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Product;

class UserProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(3);
        return view('shop', compact('products'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $product = Product::findOrFail($id);
        // dd($product);
        $product = Product::with('comments')->findOrFail($id);
        return view('product', compact('product'));
    }
}
