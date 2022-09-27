<?php

namespace App\Models;

class CourseRepository
{
    const COURSES = [
        [
            'name' => 'web',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis iaculis diam, at iaculis nunc. Praesent fermentum purus vitae nibh placerat, vel tristique quam ultricies.',

            'title' => 'Web design & development courses for beginners',
            'image' => '/img/courses-1.jpg',
            'age' => '9-12',
            'duration' => 48,
        ],
        [
            'name' => 'web2',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis iaculis diam, at iaculis nunc. Praesent fermentum purus vitae nibh placerat, vel tristique quam ultricies.',

            'title' => 'Web design for beginners',
            'image' => '/img/courses-2.jpg',
            'age' => '8-12',
            'duration' => 72,
        ],
        [
            'name' => 'web3',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis iaculis diam, at iaculis nunc. Praesent fermentum purus vitae nibh placerat, vel tristique quam ultricies.',

            'title' => 'Web design & development courses for beginners',
            'image' => '/img/courses-3.jpg',
            'age' => '9-12',
            'duration' => 48
        ],
        [
            'name' => 'web4',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis iaculis diam, at iaculis nunc. Praesent fermentum purus vitae nibh placerat, vel tristique quam ultricies.',

            'title' => 'Web design & development courses for beginners',
            'image' => '/img/courses-4.jpg',
            'age' => '9-12',
            'duration' => 48
        ],
        [
            'name' => 'web5',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis iaculis diam, at iaculis nunc. Praesent fermentum purus vitae nibh placerat, vel tristique quam ultricies.',

            'title' => 'Web design & development courses for beginners',
            'image' => '/img/courses-5.jpg',
            'age' => '8-12',
            'duration' => 72
        ],
        [
            'name' => 'web6',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis iaculis diam, at iaculis nunc. Praesent fermentum purus vitae nibh placerat, vel tristique quam ultricies.',

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
            $courses[] = new CourseDescription(
                $course['title'],
                $course['image'],
                $course['age'],
                $course['duration'],
                $course['name']
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

        // It should be better to use a fabric here
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
