<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// HR routes
Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {
    // DASHBOARD
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    
});
