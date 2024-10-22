<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Order::all();
        return view('admin.order.order', compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Order::findOrFail($id);
        return view('order', ['data' => $data]);
    }

    public function create()
    {
        $data = Order::all();
        return view('admin.order.create')->with('data', $data);
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
            'service' => 'required',
            'message' => 'required',
        ]);

        $name = request()->name;
        $email = request()->email;
        $phone = request()->phone;
        $service = request()->service;
        $message = request()->message;

        $product = Order::create([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'service' => $service,
            'message' => $message,
        ]);

        if ($product instanceof Order) {
            toastr()->success('Order has been Sent successfully!');
            return redirect()->route('order');
        }

        toastr()->error('An error has occurred please try again later!.');

        return to_route('order');
    }

    public function destroy($id)
    {
        $deletedCat = Order::findOrFail($id);
        $deletedCat->delete();

        return to_route('order')->with('primary', 'Order is Done Successfully');
    }
}
