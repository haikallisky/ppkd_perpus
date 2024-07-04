<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [App\Http\Controllers\LoginController::class, 'index']);
    Route::get('register', [\App\Http\Controllers\LoginController::class, 'register']);
    Route::post('actionRegister', [\App\Http\Controllers\LoginController::class, 'actionRegister'])->name('actionRegister');
    Route::post('actionLogin', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('actionLogin');

    Route::middleware(['role:Admin, Operator, Kepsek'])->group(function () {
        Route::resource('dashboard', App\Http\Controllers\DashboardController::class);
        Route::resource('users', App\Http\Controllers\UserController::class);
        Route::resource('level', App\Http\Controllers\LevelController::class);
        Route::resource('anggota', App\Http\Controllers\AnggotaController::class);
        Route::resource('buku', App\Http\Controllers\BukuController::class);
        Route::resource('peminjam', App\Http\Controllers\TransaksiController::class);

        Route::get('peminjaman', [\App\Http\Controllers\TransaksiController::class, 'peminjaman']);
        Route::get('tambah_peminjaman', [\App\Http\Controllers\TransaksiController::class, 'tambah_peminjaman']);
        Route::get('show_peminjaman/{id}', [\App\Http\Controllers\TransaksiController::class, 'show_peminjaman']);
        Route::get('delete_peminjaman/{id}', [\App\Http\Controllers\TransaksiController::class, 'delete_peminjaman']);
    });
});
