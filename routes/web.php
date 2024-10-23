<?php

use App\Http\Controllers\AdminAuth\AdminSessionController;
use App\Http\Controllers\AdminAuth\CategoryController;
use App\Http\Controllers\AdminAuth\CommentController;
use App\Http\Controllers\AdminAuth\MessageController as AdminAuthMessageController;
use App\Http\Controllers\AdminAuth\OrderController;
use App\Http\Controllers\AdminAuth\ProductController;
use App\Http\Controllers\AdminAuth\ProjectController;
use App\Http\Controllers\AdminAuth\RegisteredAdminController;
use App\Http\Controllers\AdminAuth\SittingController;
use App\Http\Controllers\AdminAuth\SliderController;
use App\Http\Controllers\AdminAuth\TestimonialController;
use App\Http\Controllers\AdminAuth\UserProductController;
use App\Http\Controllers\Auth\AuthCommentController as AuthAuthCommentController;
use App\Http\Controllers\Auth\CommentController as AuthCommentController;
use App\Http\Controllers\Auth\MessageController;
use App\Http\Controllers\Auth\ProjectController as AuthProjectController;
use App\Http\Controllers\Auth\UserProductController as AuthUserProductController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProfileController;
use App\Models\Product;
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
        Route::get('products', [ProductController::class, 'index'])->name('product');
        Route::get('categories', [CategoryController::class, 'index'])->name('category');
        Route::get('categories/create', [CategoryController::class, 'create'])->name('category.create');
        Route::get('products/create', [ProductController::class, 'create'])->name('product.create');
        Route::post('categories/', [CategoryController::class, 'store'])->name('category.store');
        Route::post('products/', [ProductController::class, 'store'])->name('product.store');
        Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
        Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
        Route::put('categories/{id}', [CategoryController::class, 'update'])->name('category.update');
        Route::put('products/{id}', [ProductController::class, 'update'])->name('product.update');
        Route::get('categories/{id}', [CategoryController::class, 'show'])->name('category.show');
        Route::get('products/{id}', [ProductController::class, 'show'])->name('product.show');
        Route::delete('categories/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
        Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

        Route::get('messages/', [AdminAuthMessageController::class, 'index'])->name('message');
        Route::delete('messages/{id}', [AdminAuthMessageController::class, 'destroy'])->name('message.destroy');

        Route::get('projects', [ProjectController::class, 'index'])->name('project.admin');
        Route::get('projects/create', [ProjectController::class, 'create'])->name('project.admin.create');
        Route::post('projects', [ProjectController::class, 'store'])->name('project.admin.store');
        Route::get('projects/{id}/edit', [ProjectController::class, 'edit'])->name('project.admin.edit');
        Route::put('projects/{id}', [ProjectController::class, 'update'])->name('project.admin.update');
        Route::get('projects/{id}', [ProjectController::class, 'show'])->name('project.admin.show');
        Route::delete('projects/{id}', [ProjectController::class, 'destroy'])->name('project.admin.destroy');

        Route::get('sliders', [SliderController::class, 'index'])->name('slider');
        Route::get('sliders/create', [SliderController::class, 'create'])->name('slider.create');
        Route::post('sliders', [SliderController::class, 'store'])->name('slider.store');
        Route::get('sliders/{id}/edit', [SliderController::class, 'edit'])->name('slider.edit');
        Route::put('sliders/{id}', [SliderController::class, 'update'])->name('slider.update');
        Route::get('sliders/{id}', [SliderController::class, 'show'])->name('slider.show');
        Route::delete('sliders/{id}', [SliderController::class, 'destroy'])->name('slider.destroy');

        Route::get('orders/', [OrderController::class, 'index'])->name('order');
        Route::get('orders/create', [OrderController::class, 'create'])->name('order.create');
        Route::post('orders/', [OrderController::class, 'store'])->name('order.store');
        Route::delete('orders/{id}', [OrderController::class, 'destroy'])->name('order.destroy');

        Route::get('testimonials/', [TestimonialController::class, 'index'])->name('testimonial');
        Route::get('testimonials/create', [TestimonialController::class, 'create'])->name('testimonial.create');
        Route::post('testimonials/', [TestimonialController::class, 'store'])->name('testimonial.store');
        Route::delete('testimonials/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');

        Route::get('comments/', [CommentController::class, 'index'])->name('comment');
        Route::delete('comments/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');

        Route::get('sittings/', [SittingController::class, 'index'])->name('sitting');
        Route::get('sittings/{id}/edit', [SittingController::class, 'edit'])->name('sitting.edit');
        Route::put('sittings/{id}', [SittingController::class, 'update'])->name('sitting.update');
        Route::delete('sittings/{id}', [SittingController::class, 'destroy'])->name('sitting.destroy');


        // Route::get('/', function () {
        //     return view('index');
        // });
    });
});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('home', [AuthUserProductController::class, 'index'])->name('home');
    Route::get('product/{id}', [AuthUserProductController::class, 'show'])->name('home.product');
    Route::post('messages/', [MessageController::class, 'store'])->name('message.store');
    Route::get('comments/create', [AuthCommentController::class, 'create'])->name('comment.create');
    Route::post('/comments', [AuthCommentController::class, 'store'])->name('comment.store');
    // Route::get('projects', [AuthProjectController::class, 'index'])->name('project');
    // Route::get('projects/{id}', [AuthProjectController::class, 'show'])->name('project.show');
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
