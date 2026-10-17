<?php

use App\Http\Controllers\IdeController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;

Route::get('/laporan/buat', [LaporanController::class,'create'])->name('laporan.create');
Route::post('/laporan', [LaporanController::class,'store'])->name('laporan.store');
Route::get('/laporan', [LaporanController::class,'index'])->name('laporan.index');
Route::get('/ide', [IdeController::class, 'index'])->name('ide.index');
