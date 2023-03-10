<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    public function index()
    {
        $masyarakat= masyarakat :: all();

        return view('admin.masyarakat.index', ['masyarakat' =>$masyarakat]);
    }
    public function show($nik)
    {

        $masyarakat = masyarakat::where('nik', $nik)->first();

        return view('admin.masyarakat.show', ['masyarakat'=> $masyarakat]);
    }
}
