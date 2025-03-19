<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $data = Course::all();
        return view('course.list', compact('data'));
    }
    public function create()
    {
        return view('course.add');
    }
    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required|string',
            'course_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string',
            'duration' => 'required|string',
            'price' => 'required|string',
        ]);

        $courses = new Course();
        $courses->Course_name = $request->course_name;
        $courses->description = $request->description;
        $courses->duration = $request->duration;
        $courses->price = $request->price;

        if ($request->hasFile('course_image')) {
            $file = $request->file('course_image');
            $newName = time() . $file->getClientOriginalName();
            $file->move(public_path('images'), $newName);
            $courses->course_image = 'images/' . $newName;
        }

        $courses->save(); // Moved outside the if block
        toast('Course added successfully', 'success');
        return redirect('/course');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('course.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'course_name' => 'required|string',
            'description' => 'required|string',
            'duration' => 'required|string',
            'price' => 'required|string',
            'course_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // NOT required during update
        ]);
    
        $course = Course::findOrFail($id);
        $course->Course_name = $request->course_name;
        $course->description = $request->description;
        $course->duration = $request->duration;
        $course->price = $request->price;
    
        if ($request->hasFile('course_image')) {
            $file = $request->file('course_image');
            $newName = time() . $file->getClientOriginalName();
            $file->move(public_path('images'), $newName);
            $course->course_image = 'images/' . $newName;
        }
    
        $course->save();
        toast('Course updated successfully', 'success');
        return redirect('/course');
    }
    

    public function delete($id)
    {
        Course::findOrFail($id)->delete();
        toast('Course deleted successfully', 'success');
        return redirect('/course');
    }
}
