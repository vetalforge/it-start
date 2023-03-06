<?php

namespace App\Models;

class CourseRepository
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    public function __construct()
    {
        $language = app()->getLocale();
        $this->title = 'title_' . $language;
        $this->description = 'description_' . $language;
    }

    public function getAllCourses()
    {
        $title = $this->title;

        foreach (Courses::all() as $course) {
            $courses[] = new CourseDescription(
                $course->$title,
                $course->image,
                $course->ages->age,
                $course->durations->duration,
                $course->name
            );
        }

        return empty($courses) ? [] : $courses;
    }

    public function getCourse($name)
    {
        $course = Courses::where('name', $name)->first();

        $title = $this->title;
        $description = $this->description;

        return new CourseDescription(
            $course->$title,
            $course->image,
            $course->ages->age,
            $course->durations->duration,
            $course->name,
            $course->$description
        );
    }

    public function getStudentWorkImages($course_name)
    {
        $student_works = [];
        $student_works_url_path = '/img/student_works/' . $course_name . '/';
        $dir = public_path() . $student_works_url_path;

        if (is_dir($dir)) {
            $directory_content = scandir($dir);

            foreach ($directory_content as $filename) {
                if (is_file($dir . $filename)) {
                    $student_works[] = $student_works_url_path . $filename;
                }
            }
        }

        return $student_works;
    }
}
