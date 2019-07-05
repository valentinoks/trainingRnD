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

Route::get('/movie/show/{id}', 'MovieController@show')->name('movie.show');

//Route::get('comment/f', 'CommentController@');

Route::get('/bioskop/show/{id}', 'BioskopController@show')->name('bioskop.show');

Route::get('/bioskop/form', 'BioskopController@create');

Route::post('/bioskop', 'BioskopController@bioskopIndex')->name('bioskop.add');// Mempersingkat link

Route::get('/bioskop/{id}', 'BioskopController@edit')->name('bioskop.edit');

Route::patch('/bioskop/{id}', 'BioskopController@update')->name('bioskop.update');

Route::delete('/bioskop/{id}', 'BioskopController@delete')->name('bioskop.delete');

Route::get('/bioskop', 'BioskopController@index');
