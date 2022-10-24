<?php

namespace App\Http\Controllers;

use App\Models\CourseRepository;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index(CourseRepository $courseRepository)
    {
        return view('pages.courses', ['courses' => $courseRepository->all()]);
    }

    public function getCourse(Request $request, CourseRepository $courseRepository)
    {
        $selected_course = $courseRepository->getCourse($request->id);

        return view('pages.course_details', [
            'courses'         => $courseRepository->all(),
            'selected_course' => $selected_course
        ]);
    }
}
