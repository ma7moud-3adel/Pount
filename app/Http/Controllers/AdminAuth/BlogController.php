<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Blog::all();
        return view('admin.blog.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Blog::all();
        return view('admin.blog.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imagePath = null;
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'required|mimes:jpg,png,jpeg,gif,pdf|max:2048',
            'text' => 'required|string|max:255',
            'content' => 'required',
            'tag' => 'required|string|max:255',
            'sub_tag' => 'required|string|max:255',
            'likes' => 'numeric|required',

        ]);
        if ($request->hasFile('image')) {
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('image'), $imageName);
            $imagePath = 'image/' . $imageName;
        }

        $name = request()->name;
        $category = request()->category;
        $content = request()->content;
        $text = request()->text;
        $tag = request()->tag;
        $sub_tag = request()->sub_tag;
        $likes = request()->likes;

        $product = Blog::create([
            'name' => $name,
            'category' => $category,
            'image' => $imagePath,
            'text' => $text,
            'content' => $content,
            'tag' => $tag,
            'sub_tag' => $sub_tag,
            'likes' => $likes,
        ]);

        if ($product instanceof Blog) {
            toastr()->success('Blog has been Added successfully!');
            return redirect()->route('blog.index');
        }

        toastr()->error('An error has occurred please try again later!.');

        return to_route('blog.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('image'), $imageName);
            $imagePath = 'image/' . $imageName;
        }

        $name = request()->name;
        $category = request()->category;
        $text = request()->text;
        $content = request()->content;
        $tag = request()->tag;
        $sub_tag = request()->sub_tag;
        $likes = request()->likes;

        $singleCatFromDB = Blog::findOrFail($id);
        $singleCatFromDB->update([
            'name' => $name,
            'category' => $category,
            'image' => $imagePath,
            'text' => $text,
            'content' => $content,
            'tag' => $tag,
            'sub_tag' => $sub_tag,
            'likes' => $likes,
        ]);
        return to_route('blog.index')->with('success', 'Blog Is Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deletedCat = Blog::findOrFail($id);
        $deletedCat->delete();

        return to_route('blog.index')->with('danger', 'Product is Deleted Successfully');
    }
}
