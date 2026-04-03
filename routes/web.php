<?php

use \App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json(['message' => 'Hello world!']);
});

Route::view('/login', 'login');
Route::view('/register','register');
Route::view('/catalog', 'catalog');
Route::view('/course', 'course-details');
Route::view('/my-courses', 'my-courses');
Route::view('/teacher/courses', 'teacher-courses');
Route::view('/teacher/course-groups', 'course-groups');
Route::view('/teacher/dashboard', 'teacher-dashboard');
Route::view('/payment/success', 'payment-success');
Route::view('/payment/cancel', 'payment-cancel');

