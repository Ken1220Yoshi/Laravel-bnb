<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(["middleware" => "auth"],function(){
    Route::resource('post',PostController::class);
});

