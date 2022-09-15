<?php

namespace App\Models;

class CourseDescription
{
    public $title;
    public $image;
    public $age;
    public $duration;
    public $name;
    public $description;

    public function __construct($title, $image, $age, $duration, $name = null, $description = null)
    {
        $this->title = $title;
        $this->image = $image;
        $this->age = $age;
        $this->duration = $duration;
        $this->name = $name;
        $this->description = $description;
    }
}
