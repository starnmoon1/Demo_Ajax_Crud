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

use Illuminate\Support\Facades\Route;


//route shop
Route::get('/', function () {
    return view('shop.product.list');
});

//route admin
//user
Route::prefix('/user')->group(function () {
    Route::get('/', 'UserController@index')->name('users.index');
    Route::get('/create', 'UserController@create')->name('users.create');
    Route::post('/create', 'UserController@store')->name('users.store');
    Route::get('/{id}/update', 'UserController@edit')->name('users.edit');
    Route::post('/{id}/update', 'UserController@update')->name('users.update');
    Route::get('/{id}/delete', 'UserController@destroy')->name('users.destroy');
    Route::get('{id}/show', 'UserController@show')->name('users.show');
    Route::get('/search', 'UserController@search')->name('users.search');
});
