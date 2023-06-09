<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('ping', function () {
    return 'pong';
});

Route::middleware('localization')->group(function () {
    Route::get('/', [ProductController::class, 'getPublishedProducts'])->name('home');
    Route::prefix('products')->group(function () {
        Route::get('/{product}/show', [ProductController::class, 'show'])->name('products.detail');
    });
});

Route::middleware(['auth', 'localization'])->group(function () {
    Route::get('/update-language/{lang}', [
        UserController::class,
        'updateLanguage',
    ])->name('update-language');

    Route::get('/my-account', [UserController::class, 'editProfile'])->name('user.profile');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/report/sales', [DashboardController::class, 'sales'])->name('report.sales');

    Route::prefix('products')->group(function () {
        Route::get('/{product}/images', [ProductController::class, 'showProductImages']);
        Route::delete('/{product}/images/{imageId}', [ProductController::class, 'deleteProductImage']);
        Route::post('/{product}/images', [ProductController::class, 'storeProductImage']);
    });

    Route::prefix('cart')->group(function () {
        Route::get('/', [CartController::class, 'show'])->name('cart.show');
        Route::post('/save/product/{product}', [CartController::class, 'save'])->name('cart.save');
        Route::post('/store/product/{product}', [CartController::class, 'store'])->name('cart.store');
        Route::put('/update/{id}', [CartController::class, 'update'])->name('cart.update');
        Route::get('/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    });

    Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
    Route::get('/order-history', [OrderController::class, 'getOrderHistory'])->name('order_history');
    Route::get('/order-history/{order}', [OrderController::class, 'getOrderDetail'])->name('order_detail');
    Route::post('/orders/{order}/rate', [OrderController::class, 'rateOrder'])->name('orders.rate');

    Route::resources([
        'brands' => BrandController::class,
        'categories' => CategoryController::class,
        'products' => ProductController::class,
        'roles' => RoleController::class,
        'permissions' => PermissionController::class,
        'users' => UserController::class,
        'orders' => OrderController::class,
        'ratings' => RatingController::class,
    ]);
});

Route::get('paypal-success', [OrderController::class, 'paypalSuccess']);
Route::get('paypal-error', [OrderController::class, 'paypalError']);
