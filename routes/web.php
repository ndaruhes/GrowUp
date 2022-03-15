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

Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'PageController@index');
    Route::get('/profile', 'PageController@profile')->middleware('auth');

    // MEMBER ROUTES
    Route::group(['prefix' => 'member', 'middleware' => 'RoleMember'], function () {
        Route::get('/', 'DashboardController@index')->name('home');
        Route::get('/courses', 'CourseController@index');
    });

    // MENTOR ROUTES
    Route::group(['prefix' => 'mentor', 'middleware' => 'RoleMentor'], function () {
        // 
        Route::get('/', 'DashboardController@index')->name('home');

        Route::group(['prefix' => 'courses'], function () {
            Route::get('/', 'CourseController@index');
            Route::post('/create', 'CourseController@store')->name('createCourse');
            Route::get('/edit/{id}', 'CourseController@edit')->name('editCourse');
            Route::put('/edit/{id}', 'CourseController@update')->name('updateCourse');
            Route::delete('/delete/{id}', 'CourseController@delete')->name('deleteCourse');
        });
    });

    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    //Test (Temporary Route)
    // Route::post('/home', [CourseController::class, 'createCourse'])->name('createCourse');
    // Route::delete('/home/{id}', [CourseController::class, 'deleteCourse'])->name('deleteCourse');
    // Route::patch('/home/{id}', [CourseController::class, 'updateCourse'])->name('updateCourse');
    // Route::get('/home/{id}', function ($id) {
    //     return view('updateCourse', [
    //         'courseData' => CourseModel::find($id)->first(),
    //         'categories' => CategoryController::getAll()
    //     ]);
    // });
});
