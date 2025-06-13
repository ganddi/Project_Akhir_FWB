<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerLihat(){
        return view ('register');
    }

    public function registerSubmit(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('login.lihat')->with('success','Login Berhasil');
    }

    public function loginLihat(){
        return view('login');
    }

    public function loginSubmit(Request $request){
    $user = User::where('name', $request->name)->first();
    if($user && Hash::check($request->password, $user->password)){
        Auth::login($user);
        $request->session()->regenerate();
        if(Auth::user()->role === 'admin'){
        return redirect()->route('dashboard')->with('success','Login berhasil');}

        elseif(Auth::user()->role === 'pemilik'){
        return redirect()->route('pemilik')->with('success','Login berhasil');}
        
        elseif(Auth::user()->role === 'penyewa'){
        return redirect()->route('penyewa')->with('success','Login berhasil');}
    }

    return redirect()->route('login.lihat')->with('failed', 'Username atau password salah');
}


    public function logout(){
        Auth::logout();
        return redirect()->route('login.lihat');
    }
}
