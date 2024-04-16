<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\File\FileController;

Route::get('', [FileController::class, 'index'])->name('index');
Route::get('/create', [FileController::class, 'create'])->name('create');
Route::post('/store', [FileController::class, 'store'])->name('store');