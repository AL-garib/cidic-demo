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
Route::prefix('admin')->group(function () {
    //Route::prefix('/manage')->group(function() {
    Route::get('/blockedUsers', 'Admin\DashboardController@block')->name('blocked_users');
    Route::get('user/apporve/{id}', 'Admin\PosterController@apporve')->name('poster.approve');
    Route::get('/', 'Admin\DashboardController@index')->name('dashboard');
    Route::resource('user', 'Admin\UserController');
    Route::resource('poster', 'Admin\PosterController');
    Route::resource('city', 'Admin\CityController');
    Route::resource('country', 'Admin\CountryController');
    Route::resource('photo', 'Admin\PhotoController');
    Route::resource('category', 'Admin\CategoryController');
    Route::resource('comment', 'Admin\CommentController');
    //});
});


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
