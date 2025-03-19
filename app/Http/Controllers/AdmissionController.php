<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admission;
use App\Models\Course;

class AdmissionController extends Controller
{
    /**
     * Display a listing of admissions.
     */
    public function index()
    {
        $admissions = Admission::with('course')->get(); // Eager loading courses
        return view('admission.list', compact('admissions'));
    }

    /**
     * Show the form for creating a new admission.
     */
    public function add()
    {
        $courses = Course::all();
        return view('admission.add', compact('courses'));
    }

    /**
     * Store a newly created admission in the database.
     */
    public function store(Request $request)
    {
        Admission::create($request->all());

        return redirect()->route('admission.index')->with('success', 'Admission successfully added.');
    }

    /**
     * Show the form for editing the specified admission.
     */
    public function edit($id)
    {
        $admission = Admission::findOrFail($id);
        $courses = Course::all();
        return view('admission.edit', compact('admission', 'courses'));
    }

    /**
     * Update the specified admission in the database.
     */
    public function update(Request $request, $id)
    {

        $admission = Admission::findOrFail($id);
        $admission->update($request->all());

        return redirect()->route('admission.index')->with('success', 'Admission successfully updated.');
    }

    /**
     * Remove the specified admission from the database.
     */
    public function delete($id)
    {
        $admission = Admission::findOrFail($id);
        $admission->delete();

        return redirect()->route('admission.index')->with('success', 'Admission successfully deleted.');
    }
}
