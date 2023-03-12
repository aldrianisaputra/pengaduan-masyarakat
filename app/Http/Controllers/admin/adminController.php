<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class adminController extends Controller
{
    public function formLogin(){
        // dd('ok');
        return view('admin.login');
    }

    public function login(Request $request)
    {
        // mengecek username petugas apakah ada yang sama
        $username = Petugas::where('username', $request->username)->first();

        // jika username tidak ada dalam tabel petugas maka dikirim pesan 'username tidak terdaftar'
        if (!$username) {
            return redirect()->back()->with(['pesan' => 'Username tidak terdaftar']);
        }

        // mengecek password
        $password = Hash::check($request->password, $username->password);

        // jika password yang dimasukan tidak sesuai maka akan dikirim pesan 
        if(!$password) {
            return redirect()->back()->with(['pesan' =>'Password tidak sesuai']);
        }

        // auth admin yang di buat di auth.php
        $auth = Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password]);
        
        if ($auth){
            // jika login berhasil maka akan di arahkan ke route
            return redirect()->route('dashboard.index');
        } else{
            // jika gagal maka akan tetap di halaman login dengan pesan akun tidak terdaftar
            return redirect()->back()->with(['pesan' => 'Akun Tidak Terdaftar']);
        }
    }
    
    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('admin.FormLogin');
    }
}
