<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController; // Import controller
use App\Http\Controllers\Admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});
Route::prefix('user')->group(function () { // Jika middleware auth belum dipakai
    Route::get('/welcome', [HomeController::class, 'index'])->name('user.welcome');
});
