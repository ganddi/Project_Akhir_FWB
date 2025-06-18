<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pemilik extends Controller
{
    public function pemilik(){
        return view('pemilik.layout');
    }

    public function penjualan(){
        return view('pemilik.penjualan');
    }
}
