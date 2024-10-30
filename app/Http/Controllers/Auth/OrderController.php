<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create()
    {
        $order = Order::all();
        return view('product')->with('data', $order);
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
            'product_id' => 'required',
            'count' => 'required',
            'message' => 'required',
        ]);

        $name = request()->name;
        $email = request()->email;
        $phone = request()->phone;
        $address = request()->address;
        $product_id = request()->product_id;
        $count = request()->count;
        $message = request()->message;

        $order = Order::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address' => $address,
            'product_id' => $product_id,
            'count' => $count,
            'message' => $message,
        ]);

        if ($order instanceof Order) {
            toastr()->success('Order has been Sent successfully!');
            return redirect()->back();
        }

        toastr()->error('An error has occurred please try again later!.');

        return redirect()->back()->with('success','Order has been Sent successfully!');
    }
}
