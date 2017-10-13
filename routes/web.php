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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth:api'])->group(function () {
    Route::get('/Getschedule ', 'ApiController@Getschedule');
    Route::get('/GetUserInfo ', 'ApiController@GetUserInfo');
    Route::get('/RequestCheckin ', 'ApiController@RequestCheckin');
    Route::get('/GetStudentList ', 'ApiController@GetStudentList');
});
