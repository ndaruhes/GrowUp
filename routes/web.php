<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'getView'])->name('login');


//Test
Route::post('/home', [CourseController::class, 'createCourse'])->name('createCourse');
Route::delete('/home/{id}', [CourseController::class, 'deleteCourse'])->name('deleteCourse');
// Route::patch('')
