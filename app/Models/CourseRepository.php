<?php

namespace App\Models;

use App\Models\CoursesVideos;

class CourseRepository
{
    const STUDENT_WORKS_IMG_PATH = '/img/student_works/';

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

    /**
     * @return array
     */
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

    /**
     * @param string $course_name
     * @return CourseDescription
     */
    public function getCourse($course_name)
    {
        $course = Courses::where('name', $course_name)->first();

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

    /**
     * @param string $course_name
     * @return array
     */
    public function getStudentWorkImages($course_name)
    {
        $student_works = [];
        $student_works_url_path = self::STUDENT_WORKS_IMG_PATH . $course_name . '/';
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

    /**
     * @param string $course_name
     * @return array
     */
    public function getStudentWorkVideos($course_name)
    {
        $student_works = [];

        $student_works = CoursesVideos::getStudentWorkVideos($course_name);

        return $student_works;
    }
}
