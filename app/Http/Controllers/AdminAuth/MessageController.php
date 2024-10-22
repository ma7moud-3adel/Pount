<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Product;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Message::all();
        return view('admin.message.message', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Message::findOrFail($id);
        return view('message', ['data' => $data]);
    }

    public function destroy($id)
    {
        $deletedCat = Message::findOrFail($id);
        $deletedCat->delete();

        return to_route('message')->with('info', 'Message is Readed');
    }
}
