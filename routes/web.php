<?php

use App\Http\Controllers\PoopeedoController;
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

Route::get('/', [PoopeedoController::class,'index']);
Route::get('/bo', [PoopeedoController::class,'bo']);
Route::post('/uploadFile', [PoopeedoController::class,'store']);
Route::get('/editImg/{id}', [PoopeedoController::class,'edit']);
Route::post('/uploadFile/{id}', [PoopeedoController::class,'update']);
Route::get('/delete/{id}', [PoopeedoController::class,'destroy']);