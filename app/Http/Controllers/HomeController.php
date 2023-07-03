<?php

namespace App\Http\Controllers;

use App\Models\CourseRepository;
use App\Models\Prices;

class HomeController extends Controller
{
    public function index(CourseRepository $courseRepository)
    {
        return view('pages.index', [
            'courses' => $courseRepository->getAllCourses(),
            'prices' => Prices::getPrices(),
        ]);
    }
}
