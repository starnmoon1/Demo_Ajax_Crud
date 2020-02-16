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
Route::get('/display_discount', function(){
    return view('display_discount');
});

Route::post('/display_discount', function (Illuminate\Http\Request $request) {
    $productDescription = $request->description;
    $listPrice = $request->price;
    $discountPercent= $request->discount_percent;
    $discountAmount =$listPrice * $discountPercent *0.1;
    return view('hienthi', compact(['productDescription', 'listPrice', 'discountPercent', 'discountAmount']));
})->name('demo');
