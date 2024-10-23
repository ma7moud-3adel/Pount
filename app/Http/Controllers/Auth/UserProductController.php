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
        $data = Product::all();
        return view('index', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // $data = Product::findOrFail($id);
        // $comment = Comment::all();
        $data = Product::with('comments')->findOrFail($id);
        return view('product', compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deletedCat = Product::findOrFail($id);
        $deletedCat->delete();

        return to_route('product')->with('danger', 'Product is Deleted Successfully');
    }
}
