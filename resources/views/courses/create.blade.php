@extends('layouts.app')

@section('content')
    <h1>Add New Course</h1>
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <label for="name">Course Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="description">Course Description:</label>
        <textarea name="description" id="description" required></textarea>

        <label for="department_id">Department:</label>
        <select name="department_id" id="department_id">
            @foreach ($departments as $department)
                <option value="{{ $department->id }}">{{ $department->name }}</option>
            @endforeach
        </select>

        <button type="submit">Add Course</button>
    </form>
@endsection
