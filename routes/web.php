<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\SectionsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;



Route::get('/', function () {
    return view('layouts.master');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// logout route
Route::get('/logout', [UsersController::class, 'logout'])->name('users.logout');

Route::middleware(['auth:sanctum'])->group(function () {

    // user route
    Route::resource('users', UsersController::class);


    // Department route
    Route::resource('departments', DepartmentsController::class);

    // Course Route
    Route::resource('courses', CoursesController::class);
    // section Route
    Route::resource('sections', SectionsController::class);


    });


