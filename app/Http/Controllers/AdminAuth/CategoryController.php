<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::all();
        return view('admin.category.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Category::all();
        return view('admin.category.create')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imagePath = null;
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|unique:categories,slug',
            'description' => 'nullable|string',
            'image' => 'required|mimes:jpg,png,jpeg,gif,pdf|max:2048',
            'meta_title' => 'required|string',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string',
        ]);
        // if ($request->hasFile('image')) {
        //     $imageName = $request->image->getClientOriginalName();
        //     $request->image->move(public_path('image'), $imageName);
        //     $imagePath = 'image/' . $imageName;
        // }
        if ($request->file('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('image', $imageName, 'public');

            return back()
                ->with('success', 'تم رفع الملف بنجاح!')
                ->with('file', $imagePath);
        }
        // (`name`, `slug`, `description`, `image`, `is_showin`, `is_popular`, `meta_title`, `meta_description`, `meta_keywords`)
        $name = request()->name;
        $slug = request()->slug;
        $description = request()->description;
        $is_showin = request()->is_showin;
        $is_popular = request()->is_popular;
        $meta_title = request()->meta_title;
        $meta_description = request()->meta_description;
        $meta_keywords = request()->meta_keywords;

        $is_showin = request()->has('is_showin') ? 1 : 0;
        $is_popular = request()->has('is_popular') ? 1 : 0;

        $cat = Category::create([
            'name' => $name,
            'slug' => $slug,
            'description' => $description,
            'image' => $imagePath,
            'is_showin' => $is_showin,
            'is_popular' => $is_popular,
            'meta_title' => $meta_title,
            'meta_description' => $meta_description,
            'meta_keywords' => $meta_keywords,
        ]);

        if ($cat instanceof Category) {
            toastr()->success('Data has been saved successfully!');
            return redirect()->route('category');
        }

        toastr()->error('An error has occurred please try again later!.');

        return to_route('category');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
