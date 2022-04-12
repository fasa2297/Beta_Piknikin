<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RiwayatController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
    GET - Request a resource
    POST - Create a new resorce
    PUT - Update a resource
    PATCH - Modify a resource
    DELETE - Delete a resource
    OPTIONS - Ask the server which verbs are alowed
*/
//------ Login Page -------

//Route Login
Route::get('/login', [AdminController::class, 'index']);

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

/* Laravel 8 (Also new Syntax)
Route::get('/login', 'App\Http\Controllers\AdminController@index');
*/
