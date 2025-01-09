@extends('layouts.app')

@section('content')
<h1>All Courses</h1>
<a href="{{ route('courses.create') }}">Add New Course</a>
<table>
    <thead>
        <tr>
            <th>Course Name</th>
            <th>Department</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
        <tr>
            <td>{{ $course->name }}</td>
            <td>{{ $course->department->name }}</td>
            <td>
                <a href="{{ route('courses.show', $course->id) }}">View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
