<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class penyewa extends Controller
{
    public function penyewa(){
        $lihat = Item::all();
        return view('penyewa.layout', compact('lihat'));
    }

    public function rental(Request $request){

        DB::beginTransaction();
        try{
        $rentals = new Rental();
        $rentals -> user_id = Auth::user()-> id;
        $rentals -> save();
        
        $ambil_item = $request-> item_id ? $request-> item_id : [];
        $rentals-> items()->attach($ambil_item);
        
        DB::commit();
        return redirect()->route('penyewa')->with('Pemesanan Berhasil','Silahkan Lakukan Pembayaran');
    }catch(\Exception $e){
        DB::rollBack();
        return redirect()->route('peny')->with('Pemesana Gagal','Silahkan Coba Lagi'.$e->getMessage());
    }
}

    
}
