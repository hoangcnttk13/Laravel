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


Route::get('/product_discount', function () {
    return view('product_discount');
});
Route::post('/product_discount', function (Illuminate\Http\Request $request) {
    $productDescription = $request->description;
    $productPrice = $request->price;
    $discountPercent = $request->discount_percent ;
    $discountAmount = $productPrice * $discountPercent * 0.1 / 100;
    $discountPrice = $productPrice - $discountAmount;
    return view('display_discount', compact(['discountPrice', 'discountAmount', 'productDescription', 'productPrice', 'discountPercent']));
});
