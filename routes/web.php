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

// Resource routes
Route::resource('todos', 'TodosController');

// Normal routes
Route::get('/', 'PagesController@home');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
