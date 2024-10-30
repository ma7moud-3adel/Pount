<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
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
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'nullable',
            'phone' => 'required',
            'address' => 'required',
            'service' => 'required',
            'message' => 'required',
        ]);

        $name = request()->name;
        $email = request()->email;
        $phone = request()->phone;
        $address = request()->address;
        $service = request()->service;
        $message = request()->message;

        $message = Message::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'service' => $service,
            'message' => $message,
        ]);

        if ($message instanceof Message) {
            toastr()->success('Message has been Sent successfully!');
            return redirect()->route('home');
        }

        toastr()->error('An error has occurred please try again later!.');

        return redirect()->route('home');
    }
}
