<?php

namespace App\Http\Controllers\Halo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Halocontroller extends Controller
{
    public function coba (){

        $nama = 'Rafi';
        $data = ['namaorang' => $nama];
        return view('coba.halo' , $data);
    }
}
