<?php

namespace App\Http\Controllers;

use App\Models\CourseRepository;

class HomeController extends Controller
{
    public function index(CourseRepository $courseRepository)
    {
        return view('pages.index', [
            'courses' => $courseRepository::all(),
        ]);
    }
}
