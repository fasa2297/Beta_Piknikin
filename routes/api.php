<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuseumApiController;
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

Route::get('/museum', [MuseumApiController::class, 'index']);
Route::get('/museum/{id}', [MuseumApiController::class, 'show']);
Route::get('/museumkatagori/{id}', [MuseumApiController::class, 'showKatagori']);

//Route Daftar
Route::get('/daftar', [MuseumApiController::class, 'daftar']);
Route::get('/daftar-museum', [MuseumApiController::class, 'daftarMuseum'])->name('daftarMuseum');
Route::get('/daftar/{id}/editdaftar', [MuseumApiController::class, 'edit'])->name('edit');
Route::put('/daftar/{id}', [MuseumApiController::class, 'update']);
Route::delete('/daftar/{id}', [MuseumApiController::class, 'destroy']);
