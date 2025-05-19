<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\middleware;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/dashboard',[admin::class,'dashboard'])->name('dashboard');
