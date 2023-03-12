<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\pengaduan;
use App\Models\tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

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

        $tanggapan = tanggapan::whereBetween('tgl_tanggapan', [$from, $to])->get();

        $tanggapan = DB::table('tanggapan') 
        ->join('pengaduan','pengaduan.id_pengaduan', '=', 'tanggapan.id_pengaduan') 
        ->join('petugas','petugas.id_petugas', '=', 'tanggapan.id_petugas') 
        ->get();    

        return view('admin.Laporan.index', ['tanggapan' => $tanggapan, 'from' => $from, 'to' => $to])->with('tanggapan', $tanggapan);
    }
     public function cetakLaporan($from, $to)
    {
        $tanggapan = tanggapan::whereBetween('tgl_tanggapan', [$from, $to])->get();

        $tanggapan = DB::table('tanggapan') 
        ->join('pengaduan','pengaduan.id_pengaduan', '=', 'tanggapan.id_pengaduan') 
        ->join('petugas','petugas.id_petugas', '=', 'tanggapan.id_petugas') 
        ->get(); 


        $pdf = PDF::loadView('admin.Laporan.cetak', ['tanggapan' => $tanggapan]);
        return $pdf->download('laporan-pengaduan.pdf');
    }
}
