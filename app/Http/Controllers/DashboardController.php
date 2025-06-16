<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseRepository;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $courseRepo = new CourseRepository();
        $courses = $courseRepo->getAllCourses();

        $courseNames = array_map(fn($course) => $course->name, $courses);

        if ($request->query('edit') === 'course' && $request->has('course')) {
            $selectedCourse = $courseRepo->getCourse($request->query('course'));
        }

        return view('pages.dashboard', [
            'course_names' => $courseNames,
            'selected_course' => $selectedCourse ?? null
        ]);
    }

    public function update(Request $request, $course)
    {
        $courseRepo = new CourseRepository();
        $courseModel = $courseRepo->getCourse($course);

        if (!$courseModel) {
            return redirect()->route('admin_entrance')->with('error', 'Курс не знайдено');
        }

        $courseModel->name = $request->input('name');
        $courseModel->description = $request->input('description');
        $courseModel->save();

        return redirect()->route('admin_entrance', [
            'edit' => 'course',
            'course' => $courseModel->name
        ])->with('success', 'Зміни збережено');
    }

}
