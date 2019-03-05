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


Route::resource('edumat', 'EdumatsController');
Route::resource('/users', 'UsersController');
Route::get('/users/edumatindex', 'EdumatsindexController@edumat');

// dit maakt Route::resource impliciet al aan:
// Route::get('/users', 'UsersController@index'); (werkt dus ook met /users)
Route::get('/student', 'UsersController@studentIndex');
//Route::get('/admin', 'UsersController@adminIndex');
Route::resource('/usersSubject', 'UsersSubjectController');
Route::get('/admin', 'UsersSubjectController@indexteacher');
Route::get('/usdelete', 'UsersSubjectController@indexdelete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

// Route::get('events', 'EventsController@index');
Route::get('/timetable', 'TimetableController@index');
// Route::get('/timetableindex', 'TimetableindexController@index')->middleware('admin');

Route::get('/timetable/create', 'TimetableController@create');
Route::post('/timetable', 'TimetableController@store');

// Route::get('/timetable/update', 'TimetableController@edit');
Route::get('/timetable/{timetable}/edit', 'TimetableController@edit');
Route::patch('timetable/{timetable}', 'TimetableController@update');
Route::get('/timetable/{timetable}/delete', 'TimetableController@destroy');

