<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManageController; // frontend manage allocation
use App\Http\Controllers\Admin\AssetController; // backend asset
use App\Http\Controllers\Admin\AllocationController as AdminAllocationController; // backend allocation

// 🚀 Halaman utama langsung redirect ke admin dashboard
Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// =========================
// 🔐 Auth Routes
// =========================
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// =========================
// 🌐 Routes dengan Middleware Auth
// =========================
Route::middleware('session.auth')->group(function () {

    // -------------------------
    // 🟢 Frontend User Routes
    // -------------------------
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/perusahaan', [DashboardController::class, 'perusahaan'])->name('perusahaan');
    Route::get('/produk', [DashboardController::class, 'produk'])->name('produk');
    Route::get('/hubungi', [DashboardController::class, 'hubungi'])->name('hubungi');

    // ✅ Halaman rekap data → pakai DashboardController biar sesuai relasi baru
    Route::get('/data', [DashboardController::class, 'data'])->name('data');

    // ✅ Frontend Manage Allocation (user)
    Route::get('/manage', [ManageController::class, 'index'])->name('manage.index');
    Route::post('/manage/store', [ManageController::class, 'store'])->name('manage.store');

    // -------------------------
    // 🔥 Backend Admin Routes
    // -------------------------
    Route::prefix('admin')->as('admin.')->group(function () {

        // Admin Dashboard
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // CRUD Asset (admin)
        Route::resource('assets', AssetController::class);

        // CRUD Allocation (admin)
        Route::resource('allocations', AdminAllocationController::class);
    });
});
