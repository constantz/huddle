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

Route::resource('/subjects', 'SubjectController');
Route::resource('/datalinks', 'DatalinksController');
Route::resource('edumat', 'EdumatsController');
Route::resource('/users', 'UsersController');
Route::get('/users/edumatindex', 'EdumatsindexController@edumat');
Route::get('/student', 'UsersController@studentIndex');
Route::resource('/usersSubject', 'UsersSubjectController');
Route::get('/admin', 'UsersSubjectController@indexteacher');
Route::get('/usdelete', 'UsersSubjectController@indexdelete');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/routes', 'HomeController@admin')->middleware('admin');
Route::get('/timetable', 'TimetableController@index');
Route::resource('timetable', 'TimetableController');
