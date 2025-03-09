<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Route::get('/products', function () {
//     return view('product');
// });


Route::resource('/products', ProductController::class);    
Route::resource('/users', UserController::class);