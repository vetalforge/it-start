<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CoursesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/detail', [
    \App\Http\Controllers\CourseController::class,
    'index'
]);


Route::middleware('setLocale')->group(function () {
    Route::get('/', [
        HomeController::class,
        'index'
    ])->name('home');

    Route::get('/courses', [
        \App\Http\Controllers\CoursesController::class,
        'index'
    ])->name('courses');

    Route::get('/courses/{id}', [
        \App\Http\Controllers\CoursesController::class,
        'getCourse'
    ]);
});


Route::group(
    [
        'prefix' => '{lang}',
        'where' => [
            'lang' => 'en|ru'
        ],
        'middleware' => 'setLocale'
    ], function() {

    Route::get('/', [
        HomeController::class,
        'index'
    ])->name('home');

    Route::get('/courses', [
        \App\Http\Controllers\CoursesController::class,
        'index'
    ])->name('courses');

    Route::get('/courses/{id}', [
        \App\Http\Controllers\CoursesController::class,
        'getCourse'
    ]);
});
