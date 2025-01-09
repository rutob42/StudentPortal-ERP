@extends('layout.app')

@section('content')

<h1>Add new Student</h1>
<form action="{{route('students.store')}}" method="POST">
    @csrf
    <label for="first_name">First Name: </label>
    <input type="text" name="first_name" id="first_name" required>

    <label for="last_name">Last name: </label>
    <input type="text" name="last_name" id="last_name" required>    

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>   

    <label for="department_id">Department:</label>
    <select name="department_id" id="department_id">
    @foreach($departments as $department)   
    <option value="{{$department->id}}">{{$department->name}}</option>  
    @endforeach
</select>

<button type="submit">Add Student</button>
</form>
@endsection