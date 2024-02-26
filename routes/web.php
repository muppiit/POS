<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'food_beverage'])->name('food-beverage');
    Route::get('/beauty-health', [ProductController::class, 'beauty_health'])->name('beauty-health');
    Route::get('/home-care', [ProductController::class, 'home_care'])->name('home-care');
    Route::get('/baby-kid', [ProductController::class, 'baby_kid'])->name('baby-kid');
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'index'])->name('user');


Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan');