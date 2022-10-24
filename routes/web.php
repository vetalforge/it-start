<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('setLocale')->group(function() {
    getRoutes();
});

Route::group(
    [
        'prefix' => '{lang}',
        'where' => [
            'lang' => 'en|ru'
        ],
        'middleware' => 'setLocale'
    ],
    function() {
        getRoutes();
    }
);

function getRoutes() {
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
}

Route::controller(\App\Http\Controllers\ContactController::class)->group(function () {
    Route::post('/sign-up', 'signUp');
    Route::post('/send-message', 'sendMessage');
});

/**
 * TODO: Localize forms and messages
 * TODO: Adaptive design corrections
 * TODO: Create linked table
 */
