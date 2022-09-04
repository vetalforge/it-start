<?php

namespace App\Http\Controllers;

use App\Models\CourseRepository;

class CourseController extends Controller
{
    public function index(CourseRepository $courseRepository)
    {
        return view('pages.detail', ['courses' => $courseRepository::all()]);
    }
}
