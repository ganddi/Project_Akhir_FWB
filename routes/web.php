<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\guest;
use App\Http\Controllers\middleware;
use App\Http\Controllers\pemilik;
use App\Http\Controllers\penyewa;
use App\Http\Controllers\ProfileController;
use App\Models\Item;
use Illuminate\Support\Facades\Route;

Route::get('/',[guest::class,'welcome'])->name('welcome');

Route::middleware('auth','role:admin')->group(function(){
    route::get('/dashboard',[admin::class,'dashboard'])->name('dashboard');
    Route::get('/lihatItem', [admin::class, 'lihatItem'])->name('lihatItem');
    Route::get('/tambahItem', [admin::class, 'tambahItem'])->name('tambahItem');
    route::match(['get', 'post'], '/editItem/{id}', [admin::class, 'editItem'])->name('editItem');
    Route::post('/simpanItem', [admin::class, 'simpanItem'])->name('simpanItem');
    Route::post('/hapus/{id}', [admin::class, 'hapus'])->name('hapus');


    Route::get('/lihatUser', [admin::class, 'lihatUser'])->name('lihatUser');
    
    
    Route::get('/belum_dibayar', [admin::class, 'belum_dibayar'])->name('belum_dibayar');
    Route::post('/belum_dibayar/konfirmasi/{id}', [admin::class, 'bayar'])->name('bayar');
    Route::get('/diPinjam', [admin::class, 'diPinjam'])->name('diPinjam');
    Route::post('/diPinjam/konfirmasi/{id}', [admin::class, 'kembali'])->name('kembali');
    Route::get('/diKembalikan', [admin::class, 'diKembalikan'])->name('diKembalikan');
    
});

Route::middleware('auth','role:pemilik')->group(function(){
    route::get('/pemilik',[pemilik::class,'pemilik'])->name('pemilik');
    route::post('/penjualan',[pemilik::class,'penjualan'])->name('penjualan');
});

Route::middleware('auth','role:penyewa')->group(function(){
    route::get('/penyewa',[penyewa::class,'penyewa'])->name('penyewa');
    route::post('/penyewa/submit',[penyewa::class,'rental'])->name('submitRental');
});

Route::middleware('auth')->group(function(){
    route::post('/logout',[AuthController::class,'Logout'])->name('logout');
});

route::get('/register',[AuthController::class,'registerLihat'])->name('register.lihat');
route::post('/register/submit',[AuthController::class,'registerSubmit'])->name('register.submit');

route::get('/login',[AuthController::class,'loginLihat'])->name('login.lihat');
route::post('/login/submit',[AuthController::class,'loginSubmit'])->name('login.submit');


