<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeCategoryRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Project;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Slider::all();
        return view('admin.slider.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Slider::all();
        return view('admin.slider.create')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imagePath = null;
        $request->validate([
            'title' => 'required',
            'text' => 'nullable|string',
            'image' => 'required|mimes:jpg,png,jpeg,gif,pdf|max:2048',
        ]);
        if ($request->file('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('image', $imageName, 'public');
        }
        $title = request()->title;
        $text = request()->text;


        $project = Slider::create([
            'title' => $title,
            'text' => $text,
            'image' => $imagePath,
        ]);

        if ($project instanceof Slider) {
            toastr()->success('Slider has been Added successfully!');
            return redirect()->route('slider');
        }

        toastr()->error('An error has occurred please try again later!.');

        return to_route('slidr');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Slider::findOrFail($id);
        return view('admin.slider.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Slider::findOrFail($id);
        return view('admin.slider.edit', ['data' => $data]);
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

        $title = request()->title;
        $text = request()->text;

        $singleProjectFromDB = Slider::findOrFail($id);
        $singleProjectFromDB->update([
            'title' => $title,
            'text' => $text,
            'image' => $imagePath,
        ]);
        return to_route('slider')->with('success', 'Slider Dara Is Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deletedCat = Slider::findOrFail($id);
        $deletedCat->delete();

        return to_route('slider')->with('danger', 'Slider Data is Deleted Successfully');
    }
}
