<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//
//Route::group( ['middleware' => 'admin'], function() {
//    Route::prefix('admin')->group(function() {
//        Route::get('/', 'Admin\AdminController@index');
//    })
//}
//);
Route::prefix('/admin')->group(function () {
    Route::get('/', 'Backend\MainController@mainPage')->name('dashboard');
});
