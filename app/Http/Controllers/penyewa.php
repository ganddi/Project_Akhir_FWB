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

    public function rental(Request $request)
    {
    DB::beginTransaction();

    try {
        $rental = new Rental();
        $rental->user_id = Auth::user()->id;
        $rental->save();

        $item_ids = $request->item_id ?? [];
        $rental->items()->attach($item_ids);

        DB::commit();
        return redirect()->route('penyewa')->with('success', 'Pemesanan berhasil! Silakan lakukan pembayaran.');
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->route('penyewa')->with('error', 'Pemesanan gagal! Silakan coba lagi. Error: ' . $e->getMessage());
    }
}

}

    

