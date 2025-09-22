<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManageController; // frontend user allocation
use App\Http\Controllers\Admin\AssetController; // backend asset
use App\Http\Controllers\Admin\AllocationController as AdminAllocationController; // backend allocation

// 🚀 Default redirect → admin dashboard
Route::get('/', fn () => redirect()->route('admin.dashboard'));
Route::view('/welcome', 'welcome')->name('welcome');

// =========================
// 🔐 Auth Routes
// =========================
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');
    Route::get('/register', 'showRegisterForm')->name('register');
    Route::post('/register', 'register');
    Route::post('/logout', 'logout')->name('logout');
});

// =========================
// 🌐 Routes dengan Middleware Auth
// =========================
Route::middleware('session.auth')->group(function () {

    // -------------------------
    // 🟢 Frontend User Routes
    // -------------------------
    Route::prefix('/')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('perusahaan', [DashboardController::class, 'perusahaan'])->name('perusahaan');
        Route::get('produk', [DashboardController::class, 'produk'])->name('produk');
        Route::get('hubungi', [DashboardController::class, 'hubungi'])->name('hubungi');

        // ✅ Halaman rekap data aset + alokasi
        Route::get('data', [DashboardController::class, 'data'])->name('data');

        // ✅ User dapat input alokasi (versi frontend)
        Route::get('manage', [ManageController::class, 'index'])->name('manage.index');
        Route::post('manage/store', [ManageController::class, 'store'])->name('manage.store');
    });

    // -------------------------
    // 🔥 Backend Admin Routes
    // -------------------------
    Route::prefix('admin')->as('admin.')->group(function () {

        // Admin Dashboard
        Route::view('/dashboard', 'admin.dashboard')->name('dashboard');

        // ✅ Halaman Manage Assets khusus admin
        Route::get('assets/manage', [AssetController::class, 'manage'])->name('assets.manage');
        Route::post('assets/manage/store', [AssetController::class, 'storeManage'])->name('assets.manage.store');

        // ✅ CRUD Asset
        Route::resource('assets', AssetController::class);

        // ✅ CRUD Allocation
        Route::resource('allocations', AdminAllocationController::class);
    });
});
