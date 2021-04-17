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
Route::get('/', 'BookController@index')->name('books.index');
Route::get('books/{book}', 'BookController@show')->name('books.show');
Route::get('book/{id}/create', 'ArticleController@create');
Route::get('search', 'BookController@search');

// Route::post('replies', 'ReplyController@store')->name('replies.store');
// Route::get('replies/{reply}/edit', 'ReplyController@edit')->name('replies.edit');
// Route::PUT('replies{reply}', 'ReplyController@update')->name('replies.update');

Rpute::resource('/replies', 'replyContoller');


Route::resource('/articles', 'ArticleController')->except(['show'])->middleware('auth');
Route::resource('/articles', 'ArticleController')->only(['show']);
