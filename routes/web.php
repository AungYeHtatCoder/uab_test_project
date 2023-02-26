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

Route::get('/', function () {
    return view('welcome');
});

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
    });
});