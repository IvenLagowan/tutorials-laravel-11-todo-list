<?php

namespace App\Http\Controllers\Halo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HeloController extends Controller
{
    public function coba(){
        $name = "Iven";
        $data = ['nama' => $name];
        return view('coba.halo', $data);
    }
}
