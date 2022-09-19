<?php

namespace App\Http\Controllers;

use App\Models\CourseRepository;

class HomeController extends Controller
{
    public function index(CourseRepository $courseRepository)
    {
//        $locale = app()->getLocale();
//
//        if ($locale === config('app.default_language')) {
//            $lang_prefix = '';
//            $main_page_lang_prefix = '';
//        } else {
//            $lang_prefix = $locale . '/';
//            $main_page_lang_prefix = $locale;
//        }

        return view('pages.index', [
            'courses'               => $courseRepository::all(),
//            'lang_prefix'           => $lang_prefix,
//            'main_page_lang_prefix' => $main_page_lang_prefix
        ]);
    }
}
