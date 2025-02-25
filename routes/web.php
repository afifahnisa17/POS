<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', [HomeController::class, 'home']);

Route::get('/transaction', [SalesController::class, 'transaction']);

Route::get('/category', [ProductsController::class, 'category']);

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', function () {
        return view('category.food-beverage');
    });

    Route::get('/beauty-health', function () {
        return view('category.beauty-health');
    });

    Route::get('/home-care', function () {
        return view('category.home-care');
    });

    Route::get('/baby-kid', function () {
        return view('category.baby-kid');
    });
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'userProfile']);
