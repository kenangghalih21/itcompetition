<?php

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

Route::get('/', 'HomeController@index')->name('home');

Route::resource('goals', 'GoalsController')->middleware('auth');
Route::resource('foods', 'FoodsController')->middleware('auth');
Route::resource('workouts', 'WorkoutsController')->middleware('auth');
Route::resource('days', 'DaysController')->middleware('auth');
Route::resource('profile', 'ProfilesController')->middleware('auth');

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/instruction', function () {
    return view('instruction');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'DaysController@index')->name('home');