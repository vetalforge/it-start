<?php

namespace App\Http\Controllers;

use App\Models\CourseRepository;

class CoursesController extends Controller
{
    public function index(CourseRepository $courseRepository)
    {
        return view('pages.courses', ['courses' => $courseRepository::all()]);
    }
}
