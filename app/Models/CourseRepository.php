<?php

namespace App\Models;

class CourseRepository
{
    const COURSES = [
        [
            'title' => 'Web design & development courses for beginners',
            'image' => '/img/courses-1.jpg',
            'age' => '9-12',
            'duration' => 48,

            'name' => 'web',
            'description' => 'Web design & development courses for beginners is the best course'
        ],
        [
            'title' => 'Web design & development courses for beginners',
            'image' => '/img/courses-1.jpg',
            'age' => '9-12',
            'duration' => 48,

            'name' => 'asd',
            'description' => 'Web ----'
        ],

    ];

    public static function all()
    {
        // It should be better to use a fabric here
        foreach (self::COURSES as $course) {
            $courses[] = new CourseDescription(
                $course['title'],
                $course['image'],
                $course['age'],
                $course['duration']
            );
        }

        return $courses;
    }

    public function getCourse($name)
    {
        foreach (self::COURSES as $course) {
            if ($name === $course['name']) {
                break;
            }
        }

        return new CourseDescription(
            $course['title'],
            $course['image'],
            $course['age'],
            $course['duration'],
            $course['name'],
            $course['description']
        );
    }
}
