<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\pengaduan;
use Illuminate\Http\Request;
Use PDF;

class LaporanController extends Controller
{
    public function index()
    {
        return view('admin.laporan.index');
    }
    
    public function getLaporan(Request $request)
    {
        $from = $request->from . ' ' . '00:00:00';
        $to = $request->to . ' ' . '23:59:59';

        $pengaduan = pengaduan::whereBetween('tgl_pengaduan', [$from, $to])->get();

        return view('Admin.Laporan.index', ['pengaduan' => $pengaduan, 'from' => $from, 'to' => $to]);
    }
     public function cetakLaporan($from, $to)
    {
        $pengaduan = Pengaduan::whereBetween('tgl_pengaduan', [$from, $to])->get();

        $pdf = PDF::loadView('Admin.Laporan.cetak', ['pengaduan' => $pengaduan]);
        return $pdf->download('laporan-pengaduan.pdf');
    }
}
