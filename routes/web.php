<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', [App\Http\Controllers\LoginController::class, 'index']);
    Route::get('register', [\App\Http\Controllers\LoginController::class, 'register']);
    Route::post('actionRegister', [\App\Http\Controllers\LoginController::class, 'actionRegister'])->name('actionRegister');
    Route::post('actionLogin', [\App\Http\Controllers\LoginController::class, 'actionLogin'])->name('actionLogin');

    Route::resource('dashboard', App\Http\Controllers\DashboardController::class);
    Route::resource('users', App\Http\Controllers\UserController::class);
    Route::resource('level', App\Http\Controllers\LevelController::class);
    Route::resource('anggota', App\Http\Controllers\AnggotaController::class);
    Route::resource('buku', App\Http\Controllers\BukuController::class);

});
