<?php

namespace App\Http\Controllers;

use App\Models\CourseRepository;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * @param CourseRepository $courseRepository
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(CourseRepository $courseRepository)
    {
        return view('pages.courses', ['courses' => $courseRepository->getAllCourses()]);
    }

    /**
     * @param Request $request
     * @param CourseRepository $courseRepository
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function getCourse(Request $request, CourseRepository $courseRepository)
    {
        try {
            $selected_course = $courseRepository->getCourse($request->id);
            $student_works = $courseRepository->getStudentWorkImages($selected_course->name);
            $has_student_works = !empty($student_works);

            return view('pages.course_details', [
                'courses'           => $courseRepository->getAllCourses(),
                'selected_course'   => $selected_course,
                'has_student_works' => $has_student_works,
                'student_works'     => $student_works ,
            ]);
        } catch (\Exception $e) {
            return response()->view('errors.404', [], 404);
        } catch (\Error $e) {
            return response()->view('errors.500', [], 500);
        }
    }
}
