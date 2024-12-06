<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IsiformulirController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\UserController;



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
    return view('home');
});

Route::get('/daftar', function () {
    return view('daftar');
});

// proses isiformulir
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [IsiformulirController::class, 'login'])->name('login.post');
Route::post('/logout', [IsiformulirController::class, 'logout'])->name('logout');

Route::get('/isi-formulir', function () {
    return view('isi-formulir');
})->name('isi-formulir');

Route::post('/isi-formulir', [IsiformulirController::class, 'store'])->name('isiformulir.store');

Route::middleware('auth')->group(function () {
    Route::get('/rumah', function () {
        Log::info('User is logged in.');
        return view('rumah');
    })->name('rumah');
});

Route::middleware(['auth'])->group(function () {
    // Rute untuk menampilkan form edit profil
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    
    // Rute untuk menyimpan perubahan profil
    Route::put('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');
});
