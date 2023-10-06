<?php

use App\Http\Controllers\DivisiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PenggajianController;
use App\Models\Penggajian;
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

Route::prefix('/divisi')->group(function(){
    Route::get('/', [DivisiController::class, 'index']);
    Route::get('/{id}',[DivisiController::class,'show']);
    Route::post('/create', [DivisiController::class, 'create']);
    Route::put('/update/{id}', [DivisiController::class, 'update']);
    Route::delete('/delete/{id}', [DivisiController::class, 'destroy']);

});
Route::prefix('/karyawan')->group(function(){
    Route::get('/', [KaryawanController::class, 'index']);
    Route::get('/{id}',[KaryawanController::class,'show']);
    Route::post('/create', [KaryawanController::class, 'create']);
    Route::put('/update/{id}', [KaryawanController::class, 'update']);
    Route::delete('/delete/{id}', [KaryawanController::class, 'destroy']);

});
Route::prefix('/penggajian')->group(function(){
    Route::get('/', [PenggajianController::class, 'index']);
    Route::get('/{id}',[PenggajianController::class,'show']);
    Route::post('/create', [PenggajianController::class, 'create']);
    Route::put('/update/{id}', [PenggajianController::class, 'update']);
    Route::delete('/delete/{id}', [PenggajianController::class, 'destroy']);

});
