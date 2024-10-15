<?php

use App\Http\Controllers\AdminAuth\AdminSessionController;
use App\Http\Controllers\AdminAuth\CategoryController;
use App\Http\Controllers\AdminAuth\RegisteredAdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath',]
], function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::middleware('isAdmin')->group(function () {
        Route::view('admin/home', 'admin.home')->name('admin.home');
        Route::get('categories', [CategoryController::class, 'index'])->name('category');
        Route::get('categories/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('categories/', [CategoryController::class, 'store'])->name('category.store');
        Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::put('categories/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::get('categories/{id}', [CategoryController::class, 'show'])->name('category.show');
        Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
    });
});

Route::get('/', function () {
    return view('welcome');
});

// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::middleware('isAdmin')->group(function () {
//         Route::view('/index', 'admin.index')->name('index');
//     });
//     // Route::middleware(['auth:admin'])->group(function () {
//     //     Route::view('index', 'admin.index')->name('index');
//     //     Route::view('login', 'admin.login')->name('login');
//     //     Route::view('register', 'admin.register')->name('register');


//     //     Route::post('register', [RegisteredAdminController::class, 'store'])
//     //         ->name('register');
//     //     Route::post('login', [AdminSessionController::class, 'store'])
//     //         ->name('login');

//     //     Route::post('logout', [AdminSessionController::class, 'destroy'])
//     //         ->name('logout');
//     // });
// });



// Route::middleware(['auth:admin'])->group(function () {
Route::view('/admin/login', 'admin.login')->name('admin.login');
Route::view('/admin/register', 'admin.register')->name('admin.register');


Route::post('admin/register', [RegisteredAdminController::class, 'store'])
    ->name('admin.register');
Route::post('admin/login', [AdminSessionController::class, 'store'])
    ->name('admin.login');

Route::post('admin/logout', [AdminSessionController::class, 'destroy'])
    ->name('admin.logout');
// });



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
