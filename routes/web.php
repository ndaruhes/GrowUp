<?php

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

Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    // PAGES
    Route::get('/', 'PageController@index');
    Route::get('/profile', 'PageController@profile')->middleware('auth');
    Route::get('/explore', 'PageController@explore');
    Route::get('/contact', 'PageController@contact')->name('contact');
    Route::post('/explore/search', 'CourseController@searchCourse')->name('searchCourse');

    // MENTEE ROUTES
    Route::group(['prefix' => 'mentee', 'middleware' => 'RoleMentee'], function () {
        Route::get('/', 'DashboardController@index')->name('home');

        // Kelas
        Route::get('/courses', 'CourseController@index');
    });

    // MENTOR ROUTES
    Route::group(['prefix' => 'mentor', 'middleware' => 'RoleMentor'], function () {
        // Dashboard
        Route::get('/', 'DashboardController@index')->name('home');

        // Kelas
        Route::group(['prefix' => 'courses'], function () {
            Route::get('/', 'CourseController@index');
            Route::post('/create', 'CourseController@store')->name('createCourse');
            Route::get('/show/{id}', 'CourseController@show')->name('showCourse');
            Route::get('/edit/{id}', 'CourseController@edit')->name('editCourse');
            Route::put('/edit/{id}', 'CourseController@update')->name('updateCourse');
            Route::delete('/delete/{id}', 'CourseController@delete')->name('deleteCourse');
        });

        Route::group(['prefix' => 'forum'], function () {
            // Route::get('/', 'CourseController@index');
        });

        // Pertemuan
        Route::group(['prefix' => 'session'], function () {
            Route::get('/', 'SessionController@index');
            Route::post('/create', 'SessionController@store')->name('createSession');
            Route::get('/download/{id}', 'SessionController@downloadResource')->name('downloadResource');
            Route::get('/edit/{id}/{num}', 'SessionController@edit')->name('editSession');
            Route::put('/edit/{id}', 'SessionController@update')->name('updateSession');
            Route::delete('/delete/{id}', 'SessionController@delete')->name('deleteSession');
        });
    });
});
