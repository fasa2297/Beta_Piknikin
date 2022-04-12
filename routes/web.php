<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RiwayatController;

//Route Login
Route::get('/login', [LoginController::class, 'index']);
//Route::post('/postlogin',[LoginController::class, 'postlogin'])->name('postlogin');

//Route Beranda
Route::get('/beranda', [AdminController::class, 'beranda']);
Route::post('/beranda', [AdminController::class, 'store']);

//Route Daftar
Route::get('/daftar', [AdminController::class, 'daftar']);
Route::get('/daftar-museum', [AdminController::class, 'daftarMuseum'])->name('daftarMuseum');
Route::get('/daftar/{id}/editdaftar', [AdminController::class, 'edit'])->name('edit');
Route::put('/daftar/{id}', [AdminController::class, 'update']);
Route::delete('/daftar/{id}', [AdminController::class, 'destroy']);

//Route Riwayat
Route::get('/riwayat', [RiwayatController::class, 'index'])->name('index');
Route::get('/riwayat/{id}', [RiwayatController::class, 'show'])->name('show');
Route::get('/riwayat/{id}/edit', [RiwayatController::class, 'edit'])->name('edit');
Route::put('/riwayat/{id}', [RiwayatController::class, 'update']);
Route::delete('/riwayat/{id}', [RiwayatController::class, 'destroy']);
