@extends('layouts.app')

@section('content')
    <h1>All Departments</h1>
    <a href="{{ route('departments.create') }}">Add New Department</a>
    <table>
        <thead>
            <tr>
                <th>Department Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($departments as $department)
                <tr>
                    <td>{{ $department->name }}</td>
                    <td>{{ $department->description }}</td>
                    <td>
                        <a href="{{ route('departments.show', $department->id) }}">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
