<?php

namespace App\Http\Controllers;

use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        // courses come from the database (courses table)
        $courses = Course::orderBy('code')->get();

        return view('courses', ['courses' => $courses]);
    }
}
