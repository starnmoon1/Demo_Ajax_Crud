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

Route::get('/home', function () {
    return view('admin.dashboard');
})->middleware('checkLogin');
Route::get('login', 'LoginController@showFormLogin');
Route::get('users', 'UserController@index')->middleware('checkLogin');
Route::post('login', 'LoginController@login')->name('login');
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/login');
})->name('logout');
Route::middleware('checkLogin')->prefix('admin')->group(function (){
    Route::prefix('users')->group(function (){
        Route::get('/', 'UserController@index')->name('users.index');
    });
    Route::prefix('categories')->group(function (){
        Route::get('create', 'categoryController@create')->name('categories.create');
        Route::post('create', 'categoryController@store')->name('categories.store');
        Route::get('/', 'categoryController@index')->name('category.index');
        Route::get('/{id}/delete', 'categoryController@delete')->name('category.delete');
        Route::get('/{id}/edit', 'categoryController@edit')->name('category.edit');
        Route::post('/{id}/update', 'categoryController@update')->name('category.update');
    });
});
