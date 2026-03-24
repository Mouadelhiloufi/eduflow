<?php

use \App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\InterestController;
use App\Http\Controllers\Api\RecommendationController;
use App\Http\Controllers\Api\WishlistController;
use App\Http\Controllers\Api\EnrollmentController;
use App\Http\Controllers\Api\GroupController;  




Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{course}', [CourseController::class, 'show']);

Route::get('/interests', [InterestController::class, 'index']);

Route::middleware('auth:api')->group(function () {
    Route::post('/courses', [CourseController::class, 'store']);
    Route::put('/courses/{course}', [CourseController::class, 'update']);
    Route::delete('/courses/{course}', [CourseController::class, 'destroy']);


     Route::post('/my-interests', [InterestController::class, 'saveMyInterests']);
    Route::get('/recommendations', [RecommendationController::class, 'index']);

    Route::get('/wishlist', [WishlistController::class, 'index']);
    Route::post('/wishlist', [WishlistController::class, 'store']);
    Route::delete('/wishlist/{courseId}', [WishlistController::class, 'destroy']);

    Route::get('/enrollments', [EnrollmentController::class, 'index']);
    Route::post('/enrollments', [EnrollmentController::class, 'store']);
    Route::delete('/enrollments/{courseId}', [EnrollmentController::class, 'destroy']);
});



Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('jwt')->group(function () {
    Route::get('/user', [AuthController::class, 'getUser']);
    Route::put('/user', [AuthController::class, 'updateUser']);
    Route::post('/logout', [AuthController::class, 'logout']);
});