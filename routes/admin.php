<?php

use App\Http\Controllers\AdminAuth\AdminSessionController;
use App\Http\Controllers\AdminAuth\RegisteredAdminController;
use App\Http\Controllers\ProfileController;
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

Route::prefix('admin')->name('admin.')->group(function () {
    Route::middleware('isAdmin')->group(function () {
        Route::view('home', 'admin.home')->name('home');
        Route::view('categories', 'admin.category.index')->name('category');
    });
});
