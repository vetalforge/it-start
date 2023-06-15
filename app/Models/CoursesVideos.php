<?php

namespace App\Models;

class CoursesVideos
{
    const video_links = [
        'python' => [
            'https://www.youtube.com/embed/Gjg5TvrA894',
            'https://www.youtube.com/embed/j1cji3ULSoY'
        ],
        'construct' => [
            'https://www.youtube.com/embed/N8LcckJnsJw',
            'https://www.youtube.com/embed/2jcJsTuuGYw',
            'https://www.youtube.com/embed/sOZEXRCDokE',
            'https://www.youtube.com/embed/Eux8NUO0Koo',
        ],
        'blender' => [
            'https://www.youtube.com/embed/_gvOBRh2c8k',
        ]
    ];

    public static function getStudentWorkVideos($course_name)
    {
        return array_key_exists($course_name, self::video_links) ? self::video_links[$course_name]: [];
    }
}
