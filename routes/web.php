<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login', ["title" => "Login"]);
});
Route::get('/beranda', function () {
    return view('beranda', ["title" => "Beranda"]);
});
Route::get('/daftar', function () {
    return view('daftar', ["title" => "Daftar"]);
});
