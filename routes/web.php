<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Student routes
Route::resource('students', StudentController::class);

// Course routes
Route::resource('courses', CourseController::class);
