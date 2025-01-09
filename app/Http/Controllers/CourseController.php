<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Department;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //show all courses
    public function index()
    {
        $courses = Course::all();
        return view('courses.index,', compact('courses'));
    }

    //show the form to create a new course
    public function create()
    {
        $departments = Department::all();
        return view('courses.create', compact('departments'));
    }

    //store a new course
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'department_id' => 'required'
        ]);

        $course = Course::create($validated);
        return redirect()->route('courses.index');  
    }

    
}
