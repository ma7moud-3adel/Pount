<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Product;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Remove the specified resource from storage.
     */
    public function create()
    {
        $data = Message::all();
        return view('home')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'nullable',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $name = request()->name;
        $email = request()->email;
        $phone = request()->phone;
        $message = request()->message;

        $product = Message::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'message' => $message,
        ]);

        if ($product instanceof Message) {
            toastr()->success('Message has been Sent successfully!');
            return redirect()->route('home');
        }

        toastr()->error('An error has occurred please try again later!.');

        return to_route('home');
    }
}
