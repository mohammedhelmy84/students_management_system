<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Enrollment;
use App\Models\Student;
use stdClass;

class EnrollmentController extends Controller
{
    public function index() : View
    {
        $enrollments = Enrollment::all();
        return view ('enrollments.index')->with('enrollments', $enrollments);
    }

    public function create() : View
    {
        $students = Student::pluck('name', 'id');
        return view('enrollments.create',compact('students'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Enrollment::create($input);
        return redirect('enrollments')->with('flash_message', 'Enrollment Added!');
    }

    public function show($id)
    {
        $enrollment = Enrollment::find($id);
        return view('enrollments.show')->with('enrollments', $enrollment);
    }

    public function edit($id)
    {
        $students = Student::pluck('name', 'id');
        $enrollment = Enrollment::find($id);
        return view('enrollments.edit',compact('students'))->with('enrollments', $enrollment);
    }

    public function update(Request $request, $id)
    {
        $enrollment = Enrollment::find($id);
        $input = $request->all();
        $enrollment->update($input);
        return redirect('enrollments')->with('flash_message', 'enrollment Updated!');
    }

    public function destroy($id)
    {
        Enrollment::destroy($id);
        return redirect('enrollments')->with('flash_message', 'Enrollment deleted!');
    }
}
