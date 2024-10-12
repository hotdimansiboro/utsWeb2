<?php

use App\Http\Controllers\BerandaController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('beranda.index');
// });
// Route::get('/create', function () {
//     return view('beranda.create');
// });

Route::get('/', [BerandaController::class, 'index']);
Route::get('/create', [BerandaController::class, 'create']);
Route::get('/edit/{id}', [BerandaController::class, 'edit']);
Route::post('/store', [BerandaController::class, 'store']);
Route::patch('/update/{id}', [BerandaController::class, 'update']);
Route::delete('/destroy/{id}', [BerandaController::class, 'destroy']);
// Route::resource('/mahasiswa', [BerandaController::class, 'update']);