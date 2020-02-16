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
Route::prefix('customer')->group (function () {
    Route::get('index', function () {
      return view('modules/customer/index');
    });
    Route::get('create', function () {
     // Hien thi form tao khach hang
    });
    Route::post('store', function () {
       // xu ly du lieu tao khach hang thong qua post tu form
    });
    Route::get('{id}/show', function () {
        //Hien thi thong tin khach hang co ma dinh danh id
    });
    Route::get('{id}/edit', function () {
        //Hien thi form chinh sua thong tin khach hang
    });
    Route::patch('{id}/update', function () {
        // xử lý lưu dữ liệu thông tin khách hàng được chỉnh sửa thông qua PATCH từ form
    });
    Route::delete('{id}', function () {
        // Xóa thông tin dữ liệu khách hàng
    });
});
