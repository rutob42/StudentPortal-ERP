@extends('layouts.app')
@section('content')

<h1>All Students</h1>
<a href="{{ route('students.create'}}">Add new Students</a>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
        <td>{{$student->first_name}}  {{$student->last_name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->department->name}}</td>
        <td>
            <a href="{{route('students.show', $student->id}}">View</a>
        </td>
        </tr>
        @endforeach
    </tbody>
</table>