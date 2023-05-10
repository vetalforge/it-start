<?php

namespace App\Models;

class CoursesVideos
{
    const video_links = [
        'python' => [
            "https://www.youtube.com/embed/Gjg5TvrA894",
            "https://www.youtube.com/embed/j1cji3ULSoY"
        ]
    ];

    public static function getStudentWorkVideos($course_name)
    {
        return array_key_exists($course_name, self::video_links) ? self::video_links[$course_name]: [];
    }
}
