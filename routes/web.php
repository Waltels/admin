<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::redirect('/','login');

/*RUTA PARA CREAR EL STORAGE LINK EN EL CPANEL*/
Route::get('storage', function(){
    Artisan::call('storage:link');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    
    Route::get('', [AdminController::class, 'index'])->name('index');
    Route::get('/{comunicado}', [AdminController::class, 'show'])->name('show');
});
