<?php

use App\Http\Controllers\Halo\Halocontroller;
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