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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// CATEGORY ROUTES

Route::get('/home/{Category}/collections', 'CategoryController@show')->name('category.show');
Route::get('/home', 'CategoryController@index')->name('home');
Route::get('/home/Category/create', 'CategoryController@create')->name('category.create');
Route::post('/home', 'CategoryController@store')->name('category.store');
Route::get('/home/Category/{Category}/edit', 'CategoryController@edit')->name('category.edit');
Route::put('/home/Category/{Category}', 'CategoryController@update')->name('category.update');
Route::delete('/home/{Category}', 'CategoryController@destroy')->name('category.destroy');

// COLLECTION ROUTES

Route::get('/home/Collection', 'CollectionController@index')->name('collection.index');
Route::get('/home/Collection/prueba', 'CollectionController@show')->name('collection.show');
Route::get('/home/Collection/{Collection}/edit', 'CollectionController@edit')->name('collection.edit');
Route::put('/home/Collection/{Collection}', 'CollectionController@update')->name('collection.update');
Route::get('/home/Collection/crear', 'CollectionController@create')->name('collection.create');
Route::delete('/home/Collection/{Collection}', 'CollectionController@destroy')->name('collection.destroy');
Route::post('/home/Collection', 'CollectionController@store')->name('collection.store');

//COMMENTS ROUTES
Route::post('/home/comment', 'CommentController@store');
Route::delete('/home/comment/{comment}', 'CommentController@destroy');
Route::get('/home/comment/{comment}/edit', 'CommentController@edit');
Route::put('/home/comment/{comment}', 'CommentController@update');
