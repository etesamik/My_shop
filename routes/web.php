<?php

use App\Http\Controllers\Backend\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\order\OrderController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// login ---------------
Route::get('/login', [LoginController::class, 'showLogin'])->name('show.login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [LoginController::class, 'showRegister'])->name('show.register');
Route::post('/register', [LoginController::class, 'register'])->name('register');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// end login----------


// cart ----------------------
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/empty', [CartController::class, 'emptyCart'])->name('cart.empty');

// products ------------------
Route::get('/product/{slug}', [ProductController::class, 'detail'])->name('product.detail');



// categories ----------------
Route::get('/category/{slug}', [ProductController::class, 'category'])->name('category.show');


// order ---------------------
Route::get('/cart/order', [OrderController::class, 'showCheckout'])->name('cart.order');

// payment ------------------- این فعلا ازمایشیه
Route::get('/success', function (){
    return view('frontend.payment.successpayment');
})->name('success');


