<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/products', function () {
//     return view('product');
// });


Route::resource('/products', ProductController::class)->names('products');    
Route::resource('/users', UserController::class)->names('users');