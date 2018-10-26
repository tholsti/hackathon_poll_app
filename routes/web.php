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

Route::get('/', 'PagesController@index');
// Route::get('/show', 'PagesController@show');
Route::get('/services', 'PagesController@show_user_polls');


Route::get('/', 'PollController@index');
Route::get('/index', 'PollController@index');

Route::get('manage/show/{user_id}', 'PollController@show_user_polls');
Route::get('/show/{id}', 'PollController@show');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
