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
    return view('home');
})->middleware('auth');

Route::get('/home', function () {
    return view('home');
})->middleware('auth');


Route::get('/schedule', 'ScheduleController@show')->name('schedule')->middleware('auth');
Route::get('/subjects', 'SubjectsController@show')->name('subjects')->middleware('auth');


Route::get('/tasks', 'TasksController@show')->name('tasks')->middleware('auth');
Route::get('/tasks/create', 'TasksController@create')->name('createTask')->middleware('auth');
Route::post('/tasks', 'TasksController@store')->name('storeTask')->middleware('auth');


Route::get('/workspace', 'HomeController@show')->name('workspace')->middleware('auth');
Route::get('/workspace/{id}', 'HomeController@groups')->middleware('auth');
Route::get('/workspace/user/id', 'HomeController@groups')->middleware('auth');

Auth::routes();