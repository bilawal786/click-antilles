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
use App\Http\Controllers\Auth;


Route::group(['namespace' => 'Website','middleware'=>['maintenance_mode']], function () {
//    Route::get('/', 'FrontController@index')->name('front.index');
    Route::get('/product/single/{id}', 'FrontController@productSingle')->name('product.single');
    Route::get('about', 'SettingController@about_us')->name('about');
    Route::get('privacy', 'SettingController@privacy_policy')->name('privacy');
    Route::get('terms-condition', 'SettingController@termsandCondition')->name('terms-condition');
    Route::get('faq', 'SettingController@helpTopic')->name('faq');
    Route::post('nav-cart', 'FrontController@updateNavCart')->name('nav.cart');
    Route::get('/all-product/{id?}/{position?}', 'FrontController@products')->name('all-product');
    Route::post('/product/search', 'FrontController@productSearch')->name('product.search');
    Route::get('/app/search/product/{key}', 'FrontController@productSearchFilter')->name('app.search.product');
    Route::group(['namespace' => 'ProCustomer','prefix'=>'pro'], function () {
        Route::get('/register', 'Auth\AuthRegisterController@register')->name('register');
        Route::post('/register', 'Auth\AuthRegisterController@submit')->name('pro.register');
        Route::get('/login', 'Auth\AuthRegisterController@login')->name('login');
        Route::post('/login', 'Auth\AuthRegisterController@submitLogin')->name('pro.login');
    });
});

Route::group(['namespace' => 'Website','middleware'=>['maintenance_mode','customer']], function () {
    Route::group(['namespace' => 'ProCustomer','prefix'=>'pro'], function () {
        Route::get('/product/{id?}/{position?}', 'ProCustomerController@products')->name('pro-product');
        Route::get('/search/product/{key}', 'ProCustomerController@productSearchFilter')->name('pro.search.product');
        Route::post('/product/search', 'ProCustomerController@productSearch')->name('pro.product.search');
    });
    Route::get('/product-checkout', 'FrontController@productCheckout')->name('product-checkout');
    Route::get('/product-cart', 'FrontController@productCart')->name('product-cart');
    Route::get('account-oder', 'FrontController@account_oder')->name('account-oder');
    Route::get('user-accountt', 'FrontController@user_account')->name('user-accountt');
    Route::get('account-order-detailss', 'FrontController@account_order_details')->name('account-order-detailss')->middleware('customer');
    Route::get('generate-invoice/{id}', 'FrontController@generate_invoice')->name('generate-invoice');
    Route::get('wishlistss', 'FrontController@viewWishlist')->name('wishlistss')->middleware('customer');

});
