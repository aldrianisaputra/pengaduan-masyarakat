<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\pengaduan;
use App\Models\tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TanggapanController extends Controller
{
    public function createOrUpdate(Request $request )
    {
        $pengaduan = pengaduan::where('id_pengaduan', $request->id_pengaduan)->first();
        $tanggapan = tanggapan::where('id_pengaduan', $request->id_pengaduan)->first();

        if ($tanggapan) {
            $pengaduan->update(['status'=>$request->status]);

            $tanggapan->update([
                'tgl_tanggapan'=> date('Y-m-d'),
                'tanggapan'=> $request->tanggapan ,
                'id_petugas'=> Auth::guard('admin')->user()->id_petugas ,
            ]);

            return redirect()->route('pengaduan.show', ['pengaduan' => $pengaduan, 'tanggapan' => $tanggapan]);
        }else{
            $pengaduan->update(['status'=>$request->status]);

            $tanggapan = tanggapan::create([
                'id_pengaduan' => $request->id_pengaduan,
                'tgl_tanggapan'=> date('Y-m-d'),
                'tanggapan'=> $request->tanggapan ,
                'id_petugas'=> Auth::guard('admin')->user()->id_petugas ,
            ]);
            return redirect()->route('pengaduan.show', ['pengaduan' => $pengaduan, 'tanggapan' => $tanggapan])->with(['status'=>'Berhasil Dikirim!']);
        };
    }
}
