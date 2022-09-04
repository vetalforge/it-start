<?php

namespace App\Models;

class CourseDescription
{
    public $title;
    public $image;
    public $age;
    public $duration;

    public function __construct($title, $image, $age, $duration)
    {
        $this->title = $title;
        $this->image = $image;
        $this->age = $age;
        $this->duration = $duration;
    }
}
