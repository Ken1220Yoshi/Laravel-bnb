<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;



Auth::routes();




Route::group(["middleware" => "auth"],function(){
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('post',PostController::class);
    Route::get('/post/delete/{post}',[PostController::class,'delete'])->name('post.delete');
});


