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



Route::get('/', 'PagesController@home');

Route::get('/contact', 'PagesController@contact');


Route::resource('users', 'UserController');
/*
Route::get('/users', 'UserController@index');

Route::post('/users', 'UserController@store');

Route::get('/users/create', 'UserController@create');

Route::get('/users/{user}', 'UserController@show');

Route::get('/users/{user}/edit', 'UserController@edit');

Route::patch('/users/{user}', 'UserController@update');

Route::delete('/users/{user}', 'UserController@destroy');
*/


