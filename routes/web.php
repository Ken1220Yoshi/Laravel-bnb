<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;



Auth::routes();




Route::group(["middleware" => "auth"],function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('post',PostController::class);
    Route::get('/post/delete/{post}',[PostController::class,'delete'])->name('post.delete');

    Route::resource('reservation', ReservationController::class);

    Route::resource('user',UserController::class);


    Route::resource('profile', ProfileController::class);

});


