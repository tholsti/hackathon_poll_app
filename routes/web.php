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



Route::get('/', 'PollController@index');
Route::get('/index', 'PollController@index');

Route::get('manage/show/{user_id}', 'PollController@show_user_polls');
Route::get('/show/{id}', 'PollController@show');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PollController@index');
Route::get('/show/{code}', 'PollController@show');
Route::get('/manage/create', 'PollController@create');
Route::post('/manage/create/', 'PollController@store'); 