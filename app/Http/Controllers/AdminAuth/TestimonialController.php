<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Order;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Testimonial::all();
        return view('admin.testimonial.index', compact('data'));
    }

    public function create()
    {
        $data = Testimonial::all();
        return view('admin.testimonial.create')->with('data', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $imagePath = null;

        $request->validate([
            'name' => 'required',
            'address' => 'nullable',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg,gif,pdf|max:2048',
            'rate' => 'numeric|required',
        ]);

        if ($request->file('image')) {
            $imageName = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->storeAs('image', $imageName, 'public');
        }

        $name = request()->name;
        $address = request()->address;
        $description = request()->description;
        $rate = request()->rate;

        $product = Testimonial::create([
            'name' => $name,
            'address' => $address,
            'description' => $description,
            'image' => $imagePath,
            'rate' => $rate,
        ]);

        if ($product instanceof Testimonial) {
            toastr()->success('Testimonial has been Sent successfully!');
            return redirect()->route('testimonial');
        }

        toastr()->error('An error has occurred please try again later!.');

        return to_route('testimonial');
    }

    public function destroy($id)
    {
        $deletedCat = Testimonial::findOrFail($id);
        $deletedCat->delete();

        return to_route('testimonial')->with('danger', 'Testimonial is Deleted Successfully');
    }
}
