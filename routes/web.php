<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::name('admin.')->group(function () {
    // rotues middleware admin group
    Route::middleware(['auth'])->group(function () {
        // permission resource routes
        Route::resource('/permissions', App\Http\Controllers\Admin\PermissionController::class); 
        // role resource routes
        Route::resource('/roles', App\Http\Controllers\Admin\RoleController::class);
        // user resource routes
        Route::resource('/users', App\Http\Controllers\Admin\UsersController::class);
        // user pending routes (get method)
        Route::get('/users-pending', [App\Http\Controllers\Admin\UsersController::class, 'pending'])->name('users.pending');
        // category resource routes
        Route::resource('/categories', App\Http\Controllers\Admin\CategoryController::class);

        // product resource routes
        Route::resource('/products', App\Http\Controllers\Admin\ProductController::class);
        // brands resource routes
        Route::resource('/brands', App\Http\Controllers\Admin\ProductBrandController::class);
        // orders resource routes
        Route::resource('/order', App\Http\Controllers\Admin\GetOrderController::class);
    });
});

// user routes
Route::name('user.')->group(function () {
    
        Route::get('/', [App\Http\Controllers\User\UserProductController::class, 'index'])->name('user-products.index');
  //  });
});

Route::get('/search', [App\Http\Controllers\User\UserProductController::class, 'search'])->name('products.search');
// AddToCartController
Route::post('/add-to-cart/{id}', [App\Http\Controllers\User\AddToCartController::class, 'store'])->name('add-to-cart.store');
// index cart
Route::get('/cart', [App\Http\Controllers\User\AddToCartController::class, 'index'])->name('cart.index')->middleware('auth');
// cart destroy
Route::post('/cart/{id}', [App\Http\Controllers\User\AddToCartController::class, 'destroy'])->name('cart.destroy');

// cart update
Route::post('/cart-update/{id}', [App\Http\Controllers\User\AddToCartController::class, 'update'])->name('cart.update');

// order index routes
Route::get('/orders', [App\Http\Controllers\User\OrderController::class, 'index'])->name('orders.index')->middleware('auth');
Route::post('/orders', [App\Http\Controllers\User\OrderController::class, 'store'])->name('orders.store');