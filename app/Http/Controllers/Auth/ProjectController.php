<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('all_projects', compact('projects'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = project::findOrFail($id);
        return view('project', ['data' => $data]);
    }
}
