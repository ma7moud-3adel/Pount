<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Models\Sitting;
use Illuminate\Http\Request;

class SittingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Sitting::all();
        return view('admin.sitting.index', compact('data'));
    }

    public function edit($id)
    {
        $data = Sitting::findOrFail($id);
        return view('admin.sitting.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $name = request()->name;
        $email = request()->email;
        $phone_number = request()->phone_number;
        $address = request()->address;
        $company_message = request()->company_message;
        $about = request()->about;

        $singleProjectFromDB = Sitting::findOrFail($id);
        $singleProjectFromDB->update([
            'name' => $name,
            'email' => $email,
            'phone_number' => $phone_number,
            'address' => $address,
            'company_message' => $company_message,
            'about' => $about,
        ]);
        return to_route('sitting')->with('success', 'Sittings Data Is Updated Successfully');
    }

    public function destroy($id)
    {
        $deletedCat = Sitting::findOrFail($id);
        $deletedCat->delete();

        return to_route('sitting')->with('danger', 'Old Data is Deleted Successfully');
    }
}
