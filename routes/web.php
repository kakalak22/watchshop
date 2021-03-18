<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminRoleController;
use App\Http\Controllers\BrandController;
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
Route::get('/home', 'HomeController@getIndex')->name('home');
//category
Route::get('/product-by-cate/{category_id}', 'CategoryController@ProductByCategory')->name('cate-product');
//brand
Route::get('/all-product-by-brand', 'BrandController@AllBrandProduct')->name('brand-product');
Route::get('/product-by-brand/{brand_id}', 'BrandController@ProductByBrand');
//product
Route::get('/product-details/{product_id}', 'ProductController@ProductDetail');
//cart
Route::get('/show-cart', 'CartController@showCart');
Route::get('/add-to-cart/{id}', 'CartController@addToCart');
Route::get('/delete-cart-item/{rowId}', 'CartController@deleteItem');
Route::post('/update-quantity', 'CartController@updateQuantity')->name('update-quantity');
//checkout
Route::get('/checkout', 'CartController@checkout');
Route::post('/store-shipping-information', 'CartController@saveShipDetail');
Route::get('/success', 'CartController@success');
//admin
Route::get('/admin_home', 'HomeController@AdminHome');
Route::get('/admin_login', 'HomeController@AdminLogin');
Route::get('/user', 'HomeController@user');
Route::get('/admin', 'HomeController@admin');
Route::get('/order', 'HomeController@order');

// category
Route::prefix('admin')->group(function () {
    //create category by admin
    // Route::post('/store', 'CategoryController@store');
    Route::prefix('categories')->group(function () {

        Route::get('/', [CategoryController::class, 'adminIndexCate'])->name('categories.index');

        Route::get('/adminCreateCate', [CategoryController::class, 'adminCreateCate'])->name('categories.create');

        route::post('/store', [CategoryController::class, 'store'])->name('categories.store');

        route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');

        route::post('/update/{id}', [CategoryController::class, 'update'])->name('categories.update');

        route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
    });

    //brand
    Route::prefix('brands')->group(function () {

        Route::get('/', 'BrandController@index')->name('brands.index');

        Route::get('/addBrand', [BrandController::class, 'addBrand'])->name('brands.create');

        route::post('/store', [BrandController::class, 'store'])->name("brands.store");

        route::get('/edit/{id}', [BrandController::class, 'edit'])->name("brands.edit");

        route::post('/update/{id}', [BrandController::class, 'update'])->name("brands.update");

        route::get('/delete/{id}', [BrandController::class, 'delete'])->name("brands.delete");
    });

    //product
    Route::prefix('products')->group(function () {

        Route::get('/', 'AdminProductController@index')->name('product.index');

        Route::get('/create', [AdminProductController::class, 'create'])->name('product.create');

        Route::post('/store', [AdminProductController::class, 'store'])->name('product.store');

        Route::get('/edit/{id}', [AdminProductController::class, 'edit'])->name('product.edit');

        Route::post('/update/{id}', [AdminProductController::class, 'update'])->name('product.update');

        Route::get('/delete/{id}', [AdminProductController::class, 'delete'])->name('product.delete');
    });

    //user
    Route::prefix('users')->group(function () {

        Route::get('/', 'AdminUserController@index')->name('users.index');

        Route::get('/create', [AdminUserController::class, 'create'])->name('users.create');

        Route::post('/store', [AdminUserController::class, 'store'])->name('users.store');

        Route::get('/edit/{id}', [AdminUserController::class, 'edit'])->name('users.edit');

        Route::post('/update/{id}', [AdminUserController::class, 'update'])->name('users.update');

        Route::get('/delete/{id}', [AdminUserController::class, 'delete'])->name('users.delete');
    });

    //roles
    Route::prefix('roles')->group(function () {

        Route::get('/', 'AdminRoleController@index')->name('roles.index');

        Route::get('/create', [AdminRoleController::class, 'create'])->name('roles.create');
    });
});
