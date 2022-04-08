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
//  GET
// Laravel 8 (new Syntax)
Route::get('/login', [AdminController::class, 'index']);
Route::get('/beranda', [AdminController::class, 'beranda']);
Route::post('/save', [AdminController::class, 'store']);
Route::get('/daftar', [AdminController::class, 'daftar']);

Route::get('/riwayat', [RiwayatController::class, 'index'])->name('index');
Route::get('/riwayat', [RiwayatController::class, 'riwayat']);
Route::get('/riwayat/{id}', [RiwayatController::class, 'show'])->name('show');
Route::get('/riwayat/{id}/edit', [RiwayatController::class, 'edit'])->name('edit');
Route::put('/riwayat/{id}', [RiwayatController::class, 'update']);
Route::delete('/riwayat/{id}', [RiwayatController::class, 'destroy']);
/* Laravel 8 (Also new Syntax)
Route::get('/login', 'App\Http\Controllers\AdminController@index');
*/
