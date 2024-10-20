<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeCategoryRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        return view('admin.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Product::all();
        return view('admin.product.create')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imagePath = null;
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|mimes:jpg,png,jpeg,gif,pdf|max:2048',
            'count' => 'numeric',
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

            // return back()
            //     ->with('success', 'تم رفع الملف بنجاح!')
            //     ->with('file', $imagePath);
        }
        // (`name`, `slug`, `description`, `image`, `is_showin`, `is_popular`, `meta_title`, `meta_description`, `meta_keywords`)
        $name = request()->name;
        $description = request()->description;
        $count = request()->count;
        $meta_keywords = request()->meta_keywords;

        $product = Product::create([
            'name' => $name,
            'description' => $description,
            'image' => $imagePath,
            'count' => $count,
            'meta_keywords' => $meta_keywords,
        ]);

        if ($product instanceof Product) {
            toastr()->success('Product has been Added successfully!');
            return redirect()->route('product');
        }

        toastr()->error('An error has occurred please try again later!.');

        return to_route('product');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Product::findOrFail($id);
        return view('admin.product.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Product::findOrFail($id);
        return view('admin.product.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $imagePath = null;
        if ($request->file('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('image', $imageName, 'public');
        }

        $name = request()->name;
        $description = request()->description;
        $count = request()->count;
        $meta_keywords = request()->meta_keywords;

        $singleCatFromDB = Product::findOrFail($id);
        $singleCatFromDB->update([
            'name' => $name,
            'description' => $description,
            'image' => $imagePath,
            'count' => $count,
            'meta_keywords' => $meta_keywords,
        ]);
        return to_route('product')->with('success', 'Product Is Updated Successfully');
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
