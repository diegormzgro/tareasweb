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

Route::get('/pokemones', 'PokemonesController@index')->name('pokemones.index');
Route::get('/pokemones/create', 'PokemonesController@create')->name('pokemones.create');
Route::post('/pokemones', 'PokemonesController@store')->name('pokemones.store');
