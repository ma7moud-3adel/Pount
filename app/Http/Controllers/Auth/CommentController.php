<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Comment::with(['project', 'user'])->get();
        return view('admin.comment.index', compact('data'));
    }

    public function create()
    {
        $comment = Comment::all();
        return view('product')->with('comment', $comment);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string',
            'product_id' => 'required|exists:products,id',
            'user_name' => 'required|string', // Validate user_name
        ]);

        // Corrected assignment for user_name
        $content = request()->content;
        $product_id = request()->product_id;
        $user_name = request()->user_name; // Use = instead of =>

        Comment::create([
            'content' => $content,
            'product_id' => $product_id,
            'user_name' => $user_name, // Use the correct variable
        ]);

        return to_route('home')->with('success', 'done');
    }

    public function destroy($id)
    {
        $deletedCat = Comment::findOrFail($id);
        $deletedCat->delete();

        return to_route('comment')->with('danger', 'Comment is Deleted Successfully');
    }
}
