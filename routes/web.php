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

// ADMIN ROUTES

Route::get('/admin/Category/', 'CategoryController@adminIndex');

// CATEGORY ROUTES

Route::get('/home', 'CategoryController@index')->name('home');
Route::post('/admin/category/store', 'CategoryController@store')->name('category.store');
Route::put('/admin/category/{category}', 'CategoryController@update')->name('category.update');
Route::delete('/admin/category/delete/{category}', 'CategoryController@destroy');

// COLLECTION ROUTES


Route::get('/home/Collection', 'CollectionController@index')->name('collection.index');
Route::get('/home/collection/{collection}', 'CollectionController@show')->name('collection.show');
Route::get('/home/Collection/{Collection}/edit', 'CollectionController@edit')->name('collection.edit');
Route::put('/home/Collection/{Collection}', 'CollectionController@update')->name('collection.update');
Route::get('/home/Collection/crear', 'CollectionController@create')->name('collection.create');
Route::delete('/home/Collection/{Collection}', 'CollectionController@destroy')->name('collection.destroy');
Route::post('/home/Collection', 'CollectionController@store')->name('collection.store');

// ITEM ROUTES


Route::get('/home/items','ItemController@index');
Route::get('/home/collection/item/{item}','ItemController@show');
Route::delete('/home/item/{item}','ItemController@destroy');
Route::post('/home/item/create','ItemController@store');

// IMAGE ROUTE

Route::delete('/home/image/{image}');