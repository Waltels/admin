<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Post\CategoriaController;
use App\Http\Controllers\Post\DownController;
use App\Http\Controllers\Post\PostController;

Route::resource('categorias', CategoriaController::class)->names('categorias');
Route::resource('posts', PostController::class)->names('posts');
Route::get('downs/{post}', [DownController::class, 'download' ])-> name('downs');

Route::get('downs', [DownController::class, 'descargas' ])-> name('descargas');