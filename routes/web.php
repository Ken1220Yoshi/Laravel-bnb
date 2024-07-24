<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;



Auth::routes();




Route::group(["middleware" => "auth"],function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('post',PostController::class);
<<<<<<< Updated upstream
    Route::get('/post/delete/{post}',[PostController::class,'delete'])->name('post.delete');

    Route::resource('reservation', ReservationController::class);
=======

    Route::resource('user',UserController::class);
>>>>>>> Stashed changes
});


