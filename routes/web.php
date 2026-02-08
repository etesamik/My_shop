<?php

use App\Http\Controllers\Backend\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\order\OrderController;
use App\Http\Controllers\account\AddressController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// login ---------------
Route::get('/login', [LoginController::class, 'showLogin'])->name('show.login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/register', [LoginController::class, 'showRegister'])->name('show.register');
Route::post('/register', [LoginController::class, 'register'])->name('register');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// end login----------


// cart ----------------------
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/cart/empty', [CartController::class, 'emptyCart'])->name('cart.empty');
Route::get('/cart/checkout', [OrderController::class, 'showCheckout'])->name('cart.checkout');
Route::post('cart/checkout/save', [OrderController::class, 'saveCheckout'])->name('cart.checkout.save');


// products ------------------
Route::get('/product/{slug}', [ProductController::class, 'detail'])->name('product.detail');



// categories ----------------
Route::get('/category/{slug}', [ProductController::class, 'category'])->name('category.show');

// address -------------------
Route::get('/account/addresses', [AddressController::class, 'showAddresses'])->name('show.addresses');
Route::post('/account/address/add', [AddressController::class, 'addAddresses'])->name('add.address');
Route::post('/account/address/remove/{id}', [AddressController::class, 'removeAddresses'])->name('remove.addresses');
Route::put('/account/address/update/{id}', [AddressController::class, 'updateAddresses'])->name('update.address');
Route::post('account/address/select', [AddressController::class, 'selectAddress'])->name('select.address');
// order ---------------------

// payment ------------------- این فعلا ازمایشیه
Route::get('/success', function (){
    return view('frontend.payment.successpayment');
})->name('success');

