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
})->name('homepage');


Route::get('/collections/{collection}/removeproduct', 'CollectionController@removeproduct')->name('collections.removeproduct');

Route::resource('products', 'ProductController');
Route::resource('collections', 'CollectionController');

Route::resource('cart', 'CartController');
Route::resource('users', 'UserController');

Route::get('users/viewproducts', 'UserController@viewproducts')->name('users.viewproducts');

Route::get('users/products', 'UserController@products')->name('users.products');

Route::get('collections/{collection}/products/create', 'CollectionProductController@create')->name('collections.products.create');
Route::post('collections/{collection}/products', 'CollectionProductController@store')->name('collections.products.store');

Route::get('collections/{collection}/products/{product}', 'CollectionProductController@detach')->name('collections.products.detach');