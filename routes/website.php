<?php
/*
|--------------------------------------------------------------------------
| Install Routes
|--------------------------------------------------------------------------
|
| This route is responsible for handling the intallation process
|
|
|
*/

use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Website','middleware'=>['maintenance_mode']], function () {
//    Route::get('/', 'FrontController@index')->name('front.index');
    Route::get('/product/single/{id}', 'FrontController@productSingle')->name('product.single');
    Route::post('nav-cart', 'FrontController@updateNavCart')->name('nav.cart');

});

Route::group(['namespace' => 'Website','middleware'=>['maintenance_mode','customer']], function () {


    Route::get('/product-checkout', 'FrontController@productCheckout')->name('product-checkout');
    Route::get('/product-cart', 'FrontController@productCart')->name('product-cart');

    Route::get('account-oder', 'FrontController@account_oder')->name('account-oder');
    Route::get('user-accountt', 'FrontController@user_account')->name('user-accountt');
    Route::get('account-order-detailss', 'FrontController@account_order_details')->name('account-order-detailss')->middleware('customer');
    Route::get('generate-invoice/{id}', 'FrontController@generate_invoice')->name('generate-invoice');
    Route::get('wishlistss', 'FrontController@viewWishlist')->name('wishlistss')->middleware('customer');

});
