<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/beranda', [AdminController::class, 'beranda']);
Route::post('/beranda', [AdminController::class, 'store']);

//Route Daftar
Route::get('/daftar', [AdminController::class, 'daftar']);
Route::get('/daftar-museum', [AdminController::class, 'daftarMuseum'])->name('daftarMuseum');
Route::get('/daftar/{id}/editdaftar', [AdminController::class, 'edit'])->name('edit');
Route::put('/daftar/{id}', [AdminController::class, 'update']);
Route::delete('/daftar/{id}', [AdminController::class, 'destroy']);
