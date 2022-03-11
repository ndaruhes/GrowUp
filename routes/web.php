<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;
use App\Models\CategoryModel;
use App\Models\CourseModel;

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


//Test (Temporary Route)
Route::post('/home', [CourseController::class, 'createCourse'])->name('createCourse');
Route::delete('/home/{id}', [CourseController::class, 'deleteCourse'])->name('deleteCourse');
Route::patch('/home/{id}', [CourseController::class, 'updateCourse'])->name('updateCourse');
Route::get('/home/{id}', function ($id){
    return view('updateCourse', [
        'courseData' => CourseModel::find($id)->first(),
        'categories' => CategoryController::getAll()
    ]);
});
