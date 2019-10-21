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

Route::get('/home', 'CategoryController@index')->name('home');
Route::get('/home/Category/create', 'CategoryController@create')->name('category.create');
Route::post('/home', 'CategoryController@store')->name('category.store');
Route::get('/home/Category/{Category}/edit', 'CategoryController@edit')->name('category.edit');
Route::put('/home/Category/{Category}', 'CategoryController@update')->name('category.update');
Route::delete('/home/{Category}', 'CategoryController@destroy')->name('category.destroy');

// COLLECTION ROUTES

Route::get('/home/Collections', 'CollectionController@index');
Route::get('/home/Collection/{Collection}', 'CollectionController@show');
Route::put('/home/Collection/{Collection}', 'CollectionController@update');
Route::delete('/home/Collection/{Collection}', 'CollectionController@destroy');
Route::post('/home/Collections', 'CollectionController@store');
