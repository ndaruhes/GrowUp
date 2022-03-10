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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers'], function () {
    // MEMBER ROUTES
    Route::group(['prefix' => 'member', 'middleware' => 'RoleMember'], function () {
        Route::get('', 'HomeController@index')->name('home');
    });

    // MENTOR ROUTES
    Route::group(['prefix' => 'mentor', 'middleware' => 'RoleMentor'], function () {
        Route::get('', 'HomeController@index')->name('home');
    });
});
