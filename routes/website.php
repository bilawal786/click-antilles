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
});
