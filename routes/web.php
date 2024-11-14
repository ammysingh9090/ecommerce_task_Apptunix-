<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/dashboard', function () {
    return view('dashboard.main');
});

Auth::routes();

Route::middleware(['seller'])->group(function () {
    Route::get('/home', [App\Http\Controllers\ProductController::class, 'index'])->name('home');
    Route::get('product-list', [ProductController::class, 'filter_list' ])->name('product.list');
    Route::resource('products', ProductController::class);
});





Route::get('/cart', [CartController::class, 'cart'])->name('cart');

Route::get('/', [CartController::class, 'index'])->name('index');

Route::get('add-to-cart/{product}', [CartController::class, 'addToCart'])->name('add.to.cart');

Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');

Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.from.cart');
