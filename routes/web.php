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

Route::group(['prefix' => 'catalog'], function(){
    Route::get('/', 'CatalogController@index')->name('catalog_index');
    Route::get('/list_all_products', 'CatalogController@listAllProducts')->name('list_all_products');
    Route::get('/retrieve_product', 'CatalogController@show')->name('retrieve_product');
    Route::get('/store_product', 'CatalogController@store')->name('store_product');
    Route::get('/destroy_product', 'CatalogController@destroy')->name('destroy_product');
    Route::get('/list_all_product_categories', 'CatalogController@listAllProductCategories')->name('list_product_categories');
});
