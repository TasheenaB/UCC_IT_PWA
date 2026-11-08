<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

// main menu
Route::get('/', [PageController::class, 'home'])->name('home');

// the 4 activities/pages
Route::get('/directory', [StaffController::class, 'index'])->name('directory');
Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/admissions', [PageController::class, 'admissions'])->name('admissions');
Route::get('/social', [PageController::class, 'social'])->name('social');
