<?php

namespace App\Providers;

use App\Models\CourseRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layouts.main', function($view) {
            $courseRepository = new CourseRepository;
            $courses = $courseRepository->getAllCourses();
            $topCourses = array_slice($courses, 0, 5);

            $view->with(['topCourses' => $topCourses]);
        });
    }
}
