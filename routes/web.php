<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Halo\HeloController;
use App\Http\Controllers\Todo\TodoController;

Route::get('/coba', function () {
    return view('welcome');
});



Route::get('/halo',function(){
   return view('coba.halo');
});

Route::get('/halo', [HeloController::class,'coba']);



Route::get('/todo', [TodoController::class,'index'])->name('todo');

Route::post('/todo', [TodoController::class,'store'])->name('todo.post');

Route::put('/todo/{id}', [TodoController::class,'update'])->name('todo.update');



