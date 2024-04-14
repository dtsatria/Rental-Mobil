<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\TipeMobilController;



use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('customer.sewaMobil');
})->middleware(['auth', 'verified'])->name('customer.sewaMobil');

Route::get('/admin/dashboard', function () {
    return view('mobil.index');
})->middleware(['auth', 'verified'])->name('mobil.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('mobil', MobilController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('transaksi', CustomerController::class);
    Route::resource('tipemobil', TipeMobilController::class);
    Route::get('/transaksi/{mobil}/sewa', [TransaksiController::class, 'create']);
    Route::post('/transaksi/{mobil}', [TransaksiController::class, 'store']);
});
require __DIR__.'/auth.php';
