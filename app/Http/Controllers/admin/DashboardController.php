<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\masyarakat;
use App\Models\pengaduan;
use App\Models\petugas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // berfungsi untuk mendapatkan semua data dan menghitung data yang didapat
        $petugas = petugas::all()->count();
        $masyarakat = masyarakat::all()->count();
        $proses = pengaduan::where('status','proses')->get()->count();
        $selesai = pengaduan::where('status','selesai')->get()->count();

        return view('admin.dashboard.index', ['petugas' => $petugas, 'masyarakat'=>$masyarakat, 'proses'=>$proses, 'selesai'=>$selesai]);
    }
}
