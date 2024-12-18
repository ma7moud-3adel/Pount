<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Models\Q_A;
use App\Models\Sitting;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Q_A::all();
        return view('admin.questions.index', compact('data'));
    }

    public function create()
    {
        $data = Q_A::all();
        return view('admin.questions.create', ['data' => $data]);
    }

    public function store(Request $request)
    {

        $question = request()->question;
        $answer = request()->answer;

        Q_A::create([
            'question' => $question,
            'answer' => $answer,
        ]);
        return to_route('question')->with('success', 'Question Data Is Created Successfully');
    }

    public function edit($id)
    {
        $data = Q_A::findOrFail($id);
        return view('admin.questions.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $question = request()->question;
        $answer = request()->answer;

        $singleProjectFromDB = Q_A::findOrFail($id);
        $singleProjectFromDB->update([
            'question' => $question,
            'answer' => $answer,
        ]);
        return to_route('question')->with('success', 'Question Data Is Updated Successfully');
    }

    public function destroy($id)
    {
        $deletedCat = Sitting::findOrFail($id);
        $deletedCat->delete();

        return to_route('question')->with('danger', 'Old Data is Deleted Successfully');
    }
}
