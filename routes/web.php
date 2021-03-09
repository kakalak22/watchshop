<?php

use App\Http\Controllers\CategoryController;
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
//CLIENT

//home
Route::get('/home', 'HomeController@getIndex');
//category
Route::get('/product-by-cate/{category_id}', 'CategoryController@ProductByCategory');
//brand
Route::get('/all-product-by-brand', 'BrandController@AllBrandProduct');
Route::get('/product-by-brand/{brand_id}', 'BrandController@ProductByBrand');
//product
Route::get('/product-details/{product_id}', 'ProductController@ProductDetail');



// ADMIN

//create category by admin
// Route::post('/store', 'CategoryController@store');
Route::prefix('categories')->group(function () {

    Route::get('/adminIndexCate', [CategoryController::class, 'adminIndexCate'])->name('categories.index');

    Route::get('/adminCreateCate', [CategoryController::class, 'adminCreateCate'])->name('categories.create');

    route::post('/store', [CategoryController::class, 'store'])->name("categories.store");

    route::get('/edit/{id}', [CategoryController::class, 'edit'])->name("categories.edit");

    route::post('/update/{id}', [CategoryController::class, 'update'])->name("categories.update");

    route::get('/delete/{id}', [CategoryController::class, 'delete'])->name("categories.delete");
});




//admin home
Route::get('/admin_home', 'HomeController@AdminHome');
