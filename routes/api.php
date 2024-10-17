<?php

use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Get
Route::get('/fakultas', [FakultasController::class, 'index']);
Route::get('/prodi', [ProdiController::class, 'index']);
// Post
Route::post('/fakultas', [FakultasController::class, 'store']);
Route::post('/prodi', [ProdiController::class, 'store']);
// Show
Route::get('/fakultas/{fakultas}', [FakultasController::class, 'show']);
Route::get('/prodi/{prodi}', [ProdiController::class, 'show']);
// Update
Route::patch('/fakultas/{fakultas}', [FakultasController::class, 'update']);
Route::patch('/prodi/{prodi}', [ProdiController::class, 'update']);
// Delete
Route::delete('/fakultas/{fakultas}', [FakultasController::class, 'destroy']);
Route::delete('/prodi/{prodi}', [ProdiController::class, 'destroy']);
