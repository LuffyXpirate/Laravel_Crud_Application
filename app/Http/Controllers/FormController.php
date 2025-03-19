<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forms;

class FormController extends Controller
{
    public function home()
    {
        $data = Forms::all();
        return view('welcome', compact('data'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'dob' => 'nullable|date',
            'guardian_name' => 'nullable|string',
            'guardian_phone' => 'nullable|string',
            'course' => 'nullable|string',
            'password' => 'required|string|min:6',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);

        $forms = new Forms();
        $forms->name = $request->name;
        $forms->email = $request->email;
        $forms->phone = $request->phone;
        $forms->address = $request->address;
        $forms->dob = $request->dob;
        $forms->guardian_name = $request->guardian_name;
        $forms->guardian_phone = $request->guardian_phone;
        $forms->course = $request->course;
        $forms->password = bcrypt($request->password);

        $file = $request->image;
        if ($file) {
            // Generate a unique name for the file
            $newName = time() . $file->getClientOriginalName();

            // Store the file in the public/images directory
            $file->move(public_path('images'), $newName);

            // Save the image path in the database
            $forms->image = 'images/' . $newName;
        }

        $forms->save();

        toast('Student added successfully', 'success');
        return redirect('/');
    }

   public function edit($id)
    {
        $form = Forms::findOrFail($id);
        return view('edit', compact('form'));
        
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
            'dob' => 'nullable|date',
            'guardian_name' => 'nullable|string',
            'guardian_phone' => 'nullable|string',
            'course' => 'nullable|string',
            'password' => 'required|string|min:6',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Image validation
        ]);

        $forms = Forms::FindorFail($id);
        $forms->name = $request->name;
        $forms->email = $request->email;
        $forms->phone = $request->phone;
        $forms->address = $request->address;
        $forms->dob = $request->dob;
        $forms->guardian_name = $request->guardian_name;
        $forms->guardian_phone = $request->guardian_phone;
        $forms->course = $request->course;
        $forms->password = bcrypt($request->password);

        $file = $request->image;
        if ($file) {
            // Generate a unique name for the file
            $newName = time() . $file->getClientOriginalName();

            // Store the file in the public/images directory
            $file->move(public_path('images'), $newName);

            // Save the image path in the database
            $forms->image = 'images/' . $newName;
        }

        $forms->save();

        toast('Student Updated successfully', 'success');
        return redirect('/');
    }

public function delete($id)
{
    Forms::findOrFail($id)->delete();
    toast('Student Deleted successfully', 'success');
    return redirect('/');
}
    }

