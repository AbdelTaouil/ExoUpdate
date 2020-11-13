<?php

use App\Http\Controllers\MembreController;
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

Route::get('/membre', [MembreController::class, "index"]);

Route::get('/', [MembreController::class, "indax"]);

Route::post('/test', [MembreController::class, "store"]);

Route::get('/elem/{id}', [MembreController::class, "show"]);

Route::post('/user-del/{id}', [MembreController::class, 'delete']);

Route::post('/user-edit/{id}', [MembreController::class, 'update']);

Route::get('/edit/{id}', [MembreController::class, 'edit']);

Route::post('/destroy', [MembreController::class, 'destroy']);





