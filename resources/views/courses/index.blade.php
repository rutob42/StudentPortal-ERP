@extends('layouts.app')

@section('content') 
<h1>All courses</h1>
<a href="{{route('courses.create'}}">Add new course</a>
<table>
    <thead>
        <tr>
            <th>Course name</th>
            <th>Department</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $courses)
        <tr>
            <td>{{$course->name}}</td>
            <td>{{$course->department->name}}</td>
            <td>
                <a href="{{route('courses.shows, $course->id')}}">View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection