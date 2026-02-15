<?php

use App\Http\Controllers\FruitController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('home'); });
Route::get('/fruits', [FruitController::class, 'index'])->name('fruits.index');
Route::get('/add-to-cart/{id}', [FruitController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [FruitController::class, 'cart'])->name('cart.index');
Route::get('/remove-from-cart', [FruitController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/checkout', [FruitController::class, 'checkout'])->name('checkout');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::delete('/remove-from-cart', [CartController::class, 'remove'])->name('cart.remove');