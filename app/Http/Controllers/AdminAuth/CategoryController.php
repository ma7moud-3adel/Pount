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
            // 'description' => 'nullable|string',
            'description' => 'required|string|min:3',
            'image' => 'required|mimes:jpg,png,jpeg,gif,pdf|max:2048',
        ]);
        if ($request->hasFile('image')) {
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('image'), $imageName);
            $imagePath = 'image/' . $imageName;
        }

        $name = request()->name;
        $description = request()->description;

        $cat = Category::create([
            'name' => $name,
            'description' => $description,
            'image' => $imagePath,
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
    public function show($id)
    {
        $data = Category::with('products')->findOrFail($id);
        return view('admin.category.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Category::findOrFail($id);
        return view('admin.category.edit', ['data' => $data]);
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
        $description = request()->description;

        $singleCatFromDB = Category::findOrFail($id);
        $singleCatFromDB->update([
            'name' => $name,
            'description' => $description,
            'image' => $imagePath,
        ]);
        return to_route('category')->with('success', 'Category Is Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deletedCat = Category::findOrFail($id);
        $deletedCat->delete();

        return to_route('category')->with('danger', 'Category is Deleted Successfully');
    }
}
