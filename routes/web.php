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

// CATEGORY ROUTES

Route::get('/home/{Category}/collections', 'CategoryController@show')->name('category.show');
Route::get('/home', 'CategoryController@index')->name('home');
Route::get('/home/Category/create', 'CategoryController@create');
Route::post('/home', 'CategoryController@store');
Route::get('/home/Category/{Category}/edit', 'CategoryController@edit');
Route::put('/home/Category/{Category}', 'CategoryController@update');
Route::delete('/home/{Category}', 'CategoryController@destroy');

// COLLECTION ROUTES

Route::get('/home/Collection', 'CollectionController@index');
Route::get('/home/Collection/{Collection}', 'CollectionController@show')->name('collection.show');
Route::get('/home/Collection/{Collection}/edit', 'CollectionController@edit');
Route::put('/home/Collection/{Collection}', 'CollectionController@update');
Route::get('/home/Collection/crear', 'CollectionController@create');
Route::delete('/home/Collection/{Collection}', 'CollectionController@destroy');
Route::post('/home/Collection', 'CollectionController@store');