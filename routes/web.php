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

Route::get('/comment', 'CommentController@commentIndex');

Route::get('/movie/form', 'MovieController@create');

Route::post('/movie', 'MovieController@movieIndex')->name('movie.add');// Mempersingkat link

Route::get('/movie/{id}', 'MovieController@edit')->name('movie.edit');

Route::patch('/movie/{id}', 'MovieController@update')->name('movie.update');

Route::delete('/movie/{id}', 'MovieController@delete')->name('movie.delete');

Route::get('/comment/form', 'CommentController@write');

Route::post('/comment', 'CommentController@post')->name('comment.add');

Route::get('/comment/{id}', 'CommentController@edit')->name('comment.edit');

Route::patch('/comment/{id}', 'CommentController@update')->name('comment.update');

Route::delete('/comment/{id}', 'CommentController@delete')->name('comment.delete');