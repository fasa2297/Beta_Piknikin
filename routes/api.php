<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuseumApiController;
use App\Http\Controllers\RiwayatApiController;
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

//api get daftar musuem
Route::get('/museum', [MuseumApiController::class, 'index']);

//api get detail museum by id
Route::get('/museum/{id}', [MuseumApiController::class, 'show']);

//api get data museum by catagory
Route::get('/katagori/{katagori}', [MuseumApiController::class, 'showKatagori']);

//api request tiket
Route::post('/store',  [RiwayatApiController::class, 'store']);
