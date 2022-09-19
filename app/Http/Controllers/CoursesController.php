<?php

namespace App\Http\Controllers;

use App\Models\CourseRepository;

class CoursesController extends Controller
{
    public function index(CourseRepository $courseRepository)
    {
        return view('pages.courses', ['courses' => $courseRepository::all()]);
    }

    public function getCourse($id, CourseRepository $courseRepository)
    {
        $selected_course = $courseRepository->getCourse($id);

        return view('pages.course_details', [
            'courses'         => $courseRepository::all(),
            'selected_course' => $selected_course
        ]);
    }
}
