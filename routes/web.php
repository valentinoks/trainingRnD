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

Route::get('/', 'WelcomeController@index');

Route::get('/movie', 'MovieController@index');

Route::get('/comment', 'CommentController@index');

Route::get('/movie/form', 'MovieController@create');

Route::post('/movie', 'MovieController@movieIndex')->name('movie.add');// Mempersingkat link