<?php

use App\Http\Controllers\Halo\Halocontroller;
use App\Http\Controllers\Todo\TodoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Mencoba Routes saya 'saya dari view'
// Route::get('/Halo', function (){
//     return view ('coba.halo');
// });

// Mencoba Routes saya 'saya dari controller'
Route::get('/Halo',[Halocontroller::class, 'coba']);

// mencoba dari todo web.php
Route::get('/todo',function(){
    return view('todo.app');
});

// Route::get('/todo',[TodoController::class,'index']);
// Route::get('/todo',[TodoController::class,'index']);
// Route::post('/todo',[TodoController::class,'store']);