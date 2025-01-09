@extends('layouts.app')

@section('content')
    <h1>Add New Department</h1>
    <form action="{{ route('departments.store') }}" method="POST">
        @csrf
        <label for="name">Department Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="description">Department Description:</label>
        <textarea name="description" id="description" required></textarea>

        <button type="submit">Add Department</button>
    </form>
@endsection
