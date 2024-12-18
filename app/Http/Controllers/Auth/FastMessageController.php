<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeMessageRequest;
use App\Models\Message;

class FastMessageController extends Controller
{
    /**
     * Remove the specified resource from storage.
     */
    public function create()
    {
        $message = Message::all();
        return view('index')->with('data', $message);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeMessageRequest $request)
    {
        $validatedData = $request->validated();

        Message::create($validatedData);
        return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
    }
}
