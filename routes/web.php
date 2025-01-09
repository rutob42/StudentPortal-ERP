<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use Illuminate\Support\Facades\Route;

//students route
Route::resource('students',StudentController::class);

//courses route
Route::resource('courses',CourseController::class);

//departments route
Route::resource('departments',DepartmentController::class);