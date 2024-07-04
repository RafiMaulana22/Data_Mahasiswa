<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\OperatorController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    // Bagian Login
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::post('/', [AuthController::class, 'action_login'])->name('login');
});

Route::middleware(['auth'])->group(function () {
    // Bagian Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Bagian Jurusan
    Route::get('/jurusan', [JurusanController::class, 'index']);

    Route::get('/jurusan/tambah', [JurusanController::class, 'tambah']);
    Route::post('/jurusan/tambah', [JurusanController::class, 'action_tambah']);

    Route::get('/jurusan/{id}/edit', [JurusanController::class, 'edit']);
    Route::post('/jurusan/{id}/edit', [JurusanController::class, 'action_edit']);

    Route::get('/jurusan/{id}/hapus', [JurusanController::class, 'hapus']);

    // Bagian Mahasiswa
    Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

    Route::get('/mahasiswa/tambah', [MahasiswaController::class, 'tambah']);
    Route::post('/mahasiswa/tambah', [MahasiswaController::class, 'action_tambah']);

    Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
    Route::post('/mahasiswa/{id}/edit', [MahasiswaController::class, 'action_edit']);

    Route::get('/mahasiswa/{id}/hapus', [MahasiswaController::class, 'hapus']);

    // Bagian Operator
    Route::get('/operator', [OperatorController::class, 'index']);

    Route::get('/operator/tambah', [OperatorController::class, 'tambah']);
    Route::post('/operator/tambah', [OperatorController::class, 'action_tambah']);

    Route::get('/operator/{id}/edit', [OperatorController::class, 'edit']);
    Route::post('/operator/{id}/edit', [OperatorController::class, 'action_edit']);

    // Bagian Logout
    Route::get('/logout', [AuthController::class, 'logout']);
});
