<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

//home
Route::get('/home','HomeController@getIndex');
//category
Route::get('/product-by-cate/{category_id}','CategoryController@ProductByCategory');
//brand
Route::get('/all-product-by-brand','BrandController@AllBrandProduct');
Route::get('/product-by-brand/{brand_id}','BrandController@ProductByBrand');
//product
Route::get('/product-details/{product_id}','ProductController@ProductDetail');
//cart
Route::get('/show-cart','CartController@showCart');
Route::get('/add-to-cart/{id}','CartController@addToCart');
Route::get('/delete-cart-item/{rowId}','CartController@deleteItem');

Route::get('/admin_home', 'HomeController@AdminHome');

