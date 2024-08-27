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

Route::middleware(['setLocale', 'metaDescriptions'])->group(function() {
    Route::prefix('{lang?}')->where(['lang' => 'ru'])->group(function () {
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('/courses', [\App\Http\Controllers\CoursesController::class, 'index'])->name('courses');
        Route::get('/courses/{id}', [\App\Http\Controllers\CoursesController::class, 'getCourse'])->where(['id' => 'construct|blender|scratch|web-design|backend|python|game-design']);
        Route::get('/articles/{name}', [\App\Http\Controllers\ArticlesController::class, 'index']);
    });

    Route::get('/courses', [\App\Http\Controllers\CoursesController::class, 'index'])->name('courses');
    Route::get('/courses/{id}', [\App\Http\Controllers\CoursesController::class, 'getCourse'])->where(['id' => 'construct|blender|scratch|web-design|backend|python|game-design']);;
    Route::get('/articles/{name}', [\App\Http\Controllers\ArticlesController::class, 'index']);

    Route::fallback(function () {
        abort(404);
    });
});


Route::controller(\App\Http\Controllers\ContactController::class)->group(function () {
    Route::post('/sign-up', 'signUp');
    Route::post('/send-message', 'sendMessage');
});

// Auth
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login']);
Route::post('/logout', [\App\Http\Controllers\AuthController::class, 'logout']);
Route::get('/admin', [\App\Http\Controllers\AuthController::class, 'index']);
