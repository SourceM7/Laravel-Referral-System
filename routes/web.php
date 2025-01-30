<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReferralsDashboardController;
use App\Http\Middleware\RedirectIfNoReferralCode;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->middleware(RedirectIfNoReferralCode::class)->name('profile.edit');
    Route::get('/referrals', ReferralsDashboardController::class)->name('referrals.index');
 
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
