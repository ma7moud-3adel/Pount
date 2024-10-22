<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Message;
use App\Models\Order;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;

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

    public function destroy($id)
    {
        $deletedCat = Comment::findOrFail($id);
        $deletedCat->delete();

        return to_route('comment')->with('danger', 'Comment is Deleted Successfully');
    }
}
