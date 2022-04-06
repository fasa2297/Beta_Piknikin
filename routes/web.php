<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
Route::get('/daftar', [AdminController::class, 'daftar']);
/* Laravel 8 (Also new Syntax)
Route::get('/login', 'App\Http\Controllers\AdminController@index');
*/