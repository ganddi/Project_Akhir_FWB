<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class guest extends Controller
{
    public function welcome(){
        $lihat = Item::all();
        return view('welcome', compact('lihat'));
    }
}
