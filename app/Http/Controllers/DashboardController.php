<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseRepository;
use App\Models\Courses;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $courseRepo = new CourseRepository();
        $courses = $courseRepo->getAllCourses();
        $courseNames = array_map(fn($course) => $course->name, $courses);
        $selectedCourse = null;

        if ($request->query('edit') === 'course' && $request->has('course')) {
            $courseRepo->setRepoLangFields('ua');
            $selectedCourse = $courseRepo->getCourse($request->query('course'));
            $titleUa = $selectedCourse->title;
            $descriptionUa = $selectedCourse->description;

            $courseRepo->setRepoLangFields('ru');
            $selectedCourse = $courseRepo->getCourse($request->query('course'));
            $titleRu = $selectedCourse->title;
            $descriptionRu = $selectedCourse->description;
        }

        return view('pages.dashboard', [
            'course_names' => $courseNames,
            'selected_course' => $selectedCourse,
            'title_ua' => $titleUa ?? null,
            'title_ru' => $titleRu ?? null,
            'description_ua' => $descriptionUa ?? null,
            'description_ru' => $descriptionRu ?? null,
        ]);
    }

    public function update(Request $request, $courseName)
    {
        $request->validate([
            'title_ua' => 'required|string|max:255',
            'title_ru' => 'required|string|max:255',
            'description_ua' => 'nullable|string',
            'description_ru' => 'nullable|string',
        ]);

        // Get model from DB
        $courseModel = Courses::where('name', $courseName)->first();

        if (!$courseModel) {
            return redirect()->route('admin_entrance')->with('error', 'Курс не знайдено');
        }

        // Update fields
        $courseModel->title_ua = $request->input('title_ua');
        $courseModel->title_ru = $request->input('title_ru');
        $courseModel->description_ua = $request->input('description_ua');
        $courseModel->description_ru = $request->input('description_ru');
        $courseModel->save();

        return redirect()->route('admin_entrance', [
            'edit' => 'course',
            'course' => $courseModel->name
        ])->with('success', 'Зміни збережено');
    }
}
