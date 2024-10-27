<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the image
        ]);
        if ($request->hasFile('image')) {
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('image'), $imageName);
            $imagePath = 'image/' . $imageName;
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

        return to_route('slider');
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
        if ($request->hasFile('image')) {
            $imageName = $request->image->getClientOriginalName();
            $request->image->move(public_path('image'), $imageName);
            $imagePath = 'image/' . $imageName;
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
