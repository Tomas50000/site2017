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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/products/create', 'ProductController@create');
Route::post('/products/store', 'ProductController@store')->name('product.store');
//kaip susikurti forma
//apsirasyti formos vaizda ir nukreipti i sukurta route
//apsirasyti formos action nuoroda per Routes
//
