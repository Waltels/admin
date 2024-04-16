<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::resource('roles',RoleController::class)->names('roles');