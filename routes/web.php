<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Mencoba Routes 
Route::get('/Halo', function (){
    return view ('coba.halo');
});