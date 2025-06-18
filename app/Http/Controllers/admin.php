<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Rental;
use App\Models\RentalNote;
use App\Models\User;
use Illuminate\Http\Request;
use Termwind\Components\Raw;

class admin extends Controller
{

    //Item
    public function lihatItem()
    {
        $lihat = Item::all();
        return view('admin.Item.lihatItem', compact('lihat'));
    }
    public function tambahItem()
    {
        return view('admin.Item.tambahItem');
    }
  
    public function simpanItem(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price_per_day' => 'required|numeric|min:0',
            'image_url' => ['required', 'url', 'regex:/\.(jpg|jpeg|png|webp)$/i']

        ]);
        Item::create($request->all());
        // dd($request);
        return redirect()->route('lihatItem')->with('success', 'Item berhasil ditambahkan!');
    }
    public function editItem(Request $request)
    {
        $data = Item::findOrFail($request->id);
        if ($request->isMethod('post')) {
            $data->name = $request->name;
            $data->description = $request->description;
            $data->price_per_day = $request->price_per_day;
            $data->image_url = $request->image_url;
            $data->save();
            return redirect()->route('lihatItem');
        }
        return view('admin.Item.editItem', compact('data'));
    }
    public function hapus(Request $request)
    {
        $hapus = Item::findOrFail($request->id);
        $hapus->delete();
        return redirect()->route('lihatItem');
    }


    //Rental
    public function belum_dibayar()
    {
        $rentals = Rental::where('rental_status', 'belum_dibayar')->get();
        return view('admin.rental.belumDibayar', compact('rentals'));
    }
    public function bayar($id)
    {
        $rental = Rental::findOrFail($id);
        $rental->rental_status = 'dipinjam';
        $rental->save();

        return redirect()->back()->with('success', 'Status berhasil diubah.');
    }
    public function dipinjam()
    {
        $rentals = Rental::where('rental_status', 'dipinjam')->get();
        return view('admin.rental.diPinjam', compact('rentals'));
    }
    public function dikembalikan()
    {
       $rentals = Rental::with('rentalNote')->where('rental_status', 'dikembalikan') ->get();;
        return view('admin.rental.diKembalikan', compact('rentals'));
    }   
    public function kembali($id)
    {
        $rental = Rental::findOrFail($id);
        $rental->rental_status = 'dikembalikan';
        $rental->save();

        return redirect()->back()->with('success', 'Status berhasil diubah.');
    }


    public function lihatNotes()
    {
        $rentals = RentalNote::all();
        return view('admin.rental.lihatNotes', compact('rentals'));
    }

    public function tambahNotes($id)
    {
        return view('admin.rental.tambahNotes', compact('id'));
    }


    public function simpanNotes(Request $request, $id)
    {
        $rental = Rental::findOrFail($id);

        $note = new RentalNote();
        $note->rental_id = $rental->id;
        $note->notes = $request->notes;
        $note->save();

        return redirect()->route('lihatNotes')->with('success', 'Catatan berhasil ditambahkan!');
    }
    



    //User
    public function lihatUser()
    {
        $user = User::where('role', 'penyewa')->get(); // atau 'tipe_user', tergantung nama kolomnya
        return view('admin.Item.lihatUser', compact('user'));
    }
}
