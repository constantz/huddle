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

Route::get('/progress', 'PagesController@progress');
<<<<<<< Updated upstream
<<<<<<< HEAD

=======
>>>>>>> 9965d4aa53818ef5e80fcfeb9a405b327f3c9a44
=======
Route::get('/students', 'PagesController@students');


Route::resource('/users', 'UsersController');

>>>>>>> Stashed changes
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/routes', 'HomeController@admin')->middleware('admin');


