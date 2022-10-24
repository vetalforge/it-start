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

    public function all()
    {
        $title = $this->title;

        foreach (Courses::all() as $course) {
            $courses[] = new CourseDescription(
                $course->$title,
                $course->image,
                $course->age,
                $course->duration,
                $course->name
            );
        }

        return $courses;
    }

    public function getCourse($name)
    {
        $course = Courses::where('name', $name)->first();

        $title = $this->title;
        $description = $this->description;

        return new CourseDescription(
            $course->$title,
            $course->image,
            $course->age,
            $course->duration,
            $course->name,
            $course->$description
        );
    }
}
