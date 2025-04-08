<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

// Route::get('/', function () {
//     return view('beranda');
// });



Route::get('/', [GuestController::class, 'beranda'])->name('beranda');
Route::get('/tentang-bersama-halal-madani', [GuestController::class, 'tentangKami'])->name('tentangKami');
Route::get('/lembaga-pemeriksa-halal-sertifikasi-halal', [GuestController::class, 'LPH'])->name('LPH');


// Route::get('/tentangkami', function () {
//     return view('tentangKami');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
