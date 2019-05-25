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


Auth::routes();

Route::middleware(['admin'])->group(function () {

    Route::get('/', function () {
        return view('home');
    });

    Route::get('/home', function () {
        return view('home');
    });

    Route::get('/schedule', 'ScheduleController@show')->name('schedule');
    Route::get('/subjects', 'SubjectsController@show')->name('subjects');


    Route::get('/tasks', 'TasksController@show')->name('tasks');
    Route::get('/tasks/create', 'TasksController@create')->name('createTask');
    Route::post('/tasks', 'TasksController@store')->name('storeTask');
    Route::get('/send-task/{task}', 'TasksController@sendTask');


    Route::get('/workspace', 'HomeController@show')->name('workspace');
    Route::get('/workspace/{id}', 'HomeController@groups');
    Route::get('/workspace/user/id', 'HomeController@groups');


    Route::get('/users/{user}', 'HomeController@userInfo');
});



Route::middleware(['student'])->group(function () {

    Route::get('/', function () {
        return view('student.main');
    });

    Route::get('/home', function () {
        return view('student.home');
    });

    Route::get('/my-notifications', 'StudentController@nofications')->name('my-notifications');
    Route::get('/my-questions', 'StudentController@questions')->name('my-questions');
    Route::get('/my-questions/{task}', 'StudentController@questionAnswer');

    Route::post('answer-to-question', 'StudentController@answerToQuestion')->name('answer-to-question');

});

