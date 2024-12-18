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
        $categories = Category::all();
        return view('admin.product.create', compact('data', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imagePath_01 = null;
        $imagePath_02 = null;
        $imagePath_03 = null;
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|mimes:jpg,png,jpeg,gif,pdf|max:2048',
            'image_0' => 'required|mimes:jpg,png,jpeg,gif,pdf|max:2048',
            'image_1' => 'required|mimes:jpg,png,jpeg,gif,pdf|max:2048',
            'category_id' => 'required',
            'price' => 'numeric',
            'size' => 'nullable|numeric',
        ]);
        if ($request->hasFile('image')) {
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('image'), $imageName);
            $imagePath_01 = 'image/' . $imageName;
        }
        if ($request->hasFile('image_0')) {
            $imageName = $request->image_0->getClientOriginalName();
            $request->image_0->move(public_path('image'), $imageName);
            $imagePath_02 = 'image/' . $imageName;
        }
        if ($request->hasFile('image_1')) {
            $imageName = $request->image_1->getClientOriginalName();
            $request->image_1->move(public_path('image'), $imageName);
            $imagePath_03 = 'image/' . $imageName;
        }

        $name = request()->name;
        $description = request()->description;
        $category_id = request()->category_id;
        $price = request()->price;
        $size = request()->size;

        $product = Product::create([
            'name' => $name,
            'description' => $description,
            'image' => $imagePath_01,
            'image_0' => $imagePath_02,
            'image_1' => $imagePath_03,
            'category_id' => $category_id,
            'price' => $price,
            'size' => $size,
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
        $categories = Category::all();
        return view('admin.product.edit', compact('data', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $imagePath_01 = null;
        $imagePath_02 = null;
        $imagePath_03 = null;
        if ($request->hasFile('image')) {
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('image'), $imageName);
            $imagePath_01 = 'image/' . $imageName;
        }
        if ($request->hasFile('image_0')) {
            $imageName = $request->image_0->getClientOriginalName();
            $request->image_0->move(public_path('image'), $imageName);
            $imagePath_02 = 'image/' . $imageName;
        }
        if ($request->hasFile('image_1')) {
            $imageName = $request->image_1->getClientOriginalName();
            $request->image_1->move(public_path('image'), $imageName);
            $imagePath_03 = 'image/' . $imageName;
        }

        $name = request()->name;
        $description = request()->description;
        $category_id = request()->category_id;
        $price = request()->price;
        $size = request()->size;

        $singleCatFromDB = Product::findOrFail($id);
        $singleCatFromDB->update([
            'name' => $name,
            'description' => $description,
            'image' => $imagePath_01,
            'image_0' => $imagePath_02,
            'image_1' => $imagePath_03,
            'category_id' => $category_id,
            'price' => $price,
            'size' => $size,
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
