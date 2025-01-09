<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Department;
use App\Models\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //show all students
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    //show the form for creating a new student
    public function create()
    {
        $department = Department::all();
        return view('students.create', compact('department'));  
    }

    //store a newly created student in storage
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'department_id' => 'required'
        ]);

        $student = Student::create($validated);
        return redirect()->route('students.index');
    }

    //show a single student's details
    public function show($id)
    {
        $student = Student::findorFail($id);
        return view('students.show', compact('student'));
    }
}
