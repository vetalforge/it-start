<?php

namespace App\Models;

class CourseRepository
{
    const COURSES = [
        [
            'title' => 'Web design & development courses for beginners',
            'image' => '/img/courses-1.jpg',
            'age' => '9-12',
            'duration' => 48
        ],
        [
            'title' => 'Web design & development courses for beginners',
            'image' => '/img/courses-2.jpg',
            'age' => '8-12',
            'duration' => 72
        ],
        [
            'title' => 'Web design & development courses for beginners',
            'image' => '/img/courses-3.jpg',
            'age' => '9-12',
            'duration' => 48
        ],
        [
            'title' => 'Web design & development courses for beginners',
            'image' => '/img/courses-4.jpg',
            'age' => '9-12',
            'duration' => 48
        ],
        [
            'title' => 'Web design & development courses for beginners',
            'image' => '/img/courses-5.jpg',
            'age' => '8-12',
            'duration' => 72
        ],
        [
            'title' => 'Web design & development courses for beginners',
            'image' => '/img/courses-6.jpg',
            'age' => '9-12',
            'duration' => 48
        ],
    ];

    public static function all()
    {
        // It should be better to use a fabric here
        foreach (self::COURSES as $course) {
            $courses[] = new CourseDescription($course['title'], $course['image'], $course['age'], $course['duration']);
        }

        return $courses;
    }
}
