<?php

namespace App\Http\Controllers;

use App\Models\CourseRepository;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index(CourseRepository $courseRepository)
    {
        return view('pages.courses', ['courses' => $courseRepository->getAllCourses()]);
    }

    public function getCourse(Request $request, CourseRepository $courseRepository)
    {
        try {
            $selected_course = $courseRepository->getCourse($request->id);

            return view('pages.course_details', [
                'courses'         => $courseRepository->getAllCourses(),
                'selected_course' => $selected_course
            ]);
        } catch (\Exception $e) {
            return response()->view('errors.404', [], 404);
        }
    }
}
