<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\CartController; // Thêm CartController
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/role', [RoleController::class, 'index']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        if (Auth::check()) {
            return Auth::user()->role === 'admin'
                ? redirect()->route('admin.dashboard')
                : redirect()->route('user.dashboard');
        }
        return redirect()->route('login')->with('error', 'Vui lòng đăng nhập.');
    })->name('dashboard');
    
    Route::middleware(['can:user'])->group(function () {
        Route::get('/user/dashboard', [HomeController::class, 'userDashboard'])
            ->name('user.dashboard');
        // Route cho user xem sản phẩm và giỏ hàng
        Route::get('/products', [ProductController::class, 'index'])->name('products.index');
        Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
        Route::post('/cart/add/{id}', [ProductController::class, 'addToCart'])->name('cart.add');
        Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
        // Route xem đơn hàng
        Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
        Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
    });

    Route::middleware(['can:admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])
            ->name('admin.dashboard');
        // Quản lý sản phẩm (CRUD đầy đủ)
        Route::resource('products', ProductController::class);
        // Quản lý đơn hàng (CRUD đầy đủ)
        Route::resource('orders', OrderController::class);
    });

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});