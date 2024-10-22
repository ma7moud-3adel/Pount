<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeCategoryRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = project::all();
        return view('admin.project.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Project::all();
        return view('admin.project.create')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imagePath = null;
        $request->validate([
            'title' => 'required',
            'description' => 'nullable|string',
            'image' => 'required|mimes:jpg,png,jpeg,gif,pdf|max:2048',
            'description' => 'nullable|string',
        ]);
        if ($request->file('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('image', $imageName, 'public');
        }
        $title = request()->title;
        $description = request()->description;


        $project = Project::create([
            'title' => $title,
            'description' => $description,
            'image' => $imagePath,
        ]);

        if ($project instanceof Project) {
            toastr()->success('Projects has been Added successfully!');
            return redirect()->route('project.admin.store');
        }

        toastr()->error('An error has occurred please try again later!.');

        return to_route('project.admin.store');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Project::findOrFail($id);
        return view('admin.project.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Project::findOrFail($id);
        return view('admin.project.edit', ['data' => $data]);
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
        $description = request()->description;

        $singleProjectFromDB = Project::findOrFail($id);
        $singleProjectFromDB->update([
            'title' => $title,
            'description' => $description,
            'image' => $imagePath,
        ]);
        return to_route('project.admin.store')->with('success', 'Project Is Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deletedCat = Project::findOrFail($id);
        $deletedCat->delete();

        return to_route('product')->with('danger', 'Product is Deleted Successfully');
    }
}
