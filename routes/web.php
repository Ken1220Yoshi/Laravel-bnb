<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// <<<<<<< HEAD
// =======

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// <<<<<<< HEAD
// >>>>>>> 163b810af1f52849a8722cafb56e86e445a3b770
// =======
// >>>>>>> 163b810af1f52849a8722cafb56e86e445a3b770
