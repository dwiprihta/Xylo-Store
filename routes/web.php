<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/details/{id}', 'DetailController@index')->name('details');
Route::get('/carts', 'cartController@index')->name('carts');
Route::get('/success', 'cartController@success')->name('success');
Route::get('/register/success', 'Auth\RegisterController@success')->name('register-success');
Route::get('/dashboards', 'DashboardController@index')->name('dashboard');
Route::get('/dashboards/products', 'DashboardController@product')->name('product');
Route::get('/dashboards/products/create', 'DashboardController@create')->name('product-create');
Route::get('/dashboards/products/{id}', 'DashboardController@detail')->name('product-detail');




Auth::routes();


