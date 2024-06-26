<?php
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\ArchivoController;
use App\Http\Controllers\Admin\AsignacionController;
use App\Http\Controllers\Admin\ComController;
use App\Http\Controllers\Admin\ComisionController;
use App\Http\Controllers\Admin\ComunicadoController;
use App\Http\Controllers\Admin\ContController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DocumentoController;
use App\Http\Controllers\Admin\EscritorioController;
use App\Http\Controllers\Admin\FaltasdocController;
use App\Http\Controllers\Admin\PermisoController;
use App\Http\Controllers\Admin\PeuserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\FuserController;
use App\Http\Controllers\Admin\PlanesController;

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::resource('roles',RoleController::class)->names('roles');

Route::resource('users',UserController::class)->except('show', 'create', 'store');

Route::get('archivos', [ArchivoController::class, 'index'])->name('archivos');

Route::resource('documentos', DocumentoController::class)->names('documentos');

Route::resource('permisos', PermisoController::class)->names('permisos');

// Rutas para ver los permisos por usuario...
Route::get('peuser', [PeuserController::class, 'index']) ->name('peuser');
Route::get('peuser/{permiso}', [PeuserController::class, 'show'])->name('peuser.show');

// Ruta para el crud faltas...

Route::resource('faltasdocs', FaltasdocController::class)->names('faltasdocs');

// Rutas para ver las faltas por usuario...

Route::get('fuser', [FuserController::class, 'index']) ->name('fuser');
Route::get('fuser/{faltasdoc}', [FuserController::class, 'show'])->name('fuser.show');


//Rutas para administrar el comunicados
Route::get('comunicados/pdf/{comunicado}', [ComunicadoController::class, 'pdf'])->name('comunicados.pdf');
Route::resource('comunicados', ComunicadoController::class)->names('comunicados');

//Rutas comisiones
Route::get('com', [ComController::class, 'index'])->name('com');
Route::resource('comisions', ComisionController::class)->names('comisions');
Route::resource('asignacions', AsignacionController::class)->names('asignacions');

//Rutas para planificaciones
Route::resource('plans', PlanesController::class)->names('plans');
Route::get('cont', [ContController::class, 'index'])->name('cont');