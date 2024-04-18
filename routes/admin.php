<?php
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\ArchivoController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DocumentoController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::resource('roles',RoleController::class)->names('roles');

Route::resource('users',UserController::class)->except('show', 'create', 'store');

Route::get('archivos', [ArchivoController::class, 'index'])->name('archivos');

Route::resource('documentos', DocumentoController::class)->names('documentos');