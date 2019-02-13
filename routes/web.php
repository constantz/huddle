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


Route::get('/students', 'PagesController@students');


Route::resource('/users', 'UsersController');

// dit maakt Route::resource impliciet al aan:
// Route::get('/users', 'UsersController@index'); (werkt dus ook met /users)
Route::get('/progress', 'UsersController@progressIndex');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');


