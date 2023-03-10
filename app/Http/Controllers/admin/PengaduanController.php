<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\pengaduan;
use App\Models\tanggapan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index()
    {
        // variabel pengaduan akan di urutkan berdasarkan descending
        $pengaduan = pengaduan::orderBy('tgl_pengaduan', 'desc')->get();

        return view('admin.pengaduan.index', ['pengaduan' => $pengaduan]);
    }


    public function show($id_pengaduan)
    {
        $pengaduan = pengaduan::where('id_pengaduan',$id_pengaduan)->first();
        $tanggapan = tanggapan::where('id_pengaduan',$id_pengaduan)->first();

        return view('admin.pengaduan.show', ['pengaduan'=>$pengaduan, 'tanggapan'=>$tanggapan]);
    }
}
