@extends('layouts.admin')

@section('content')

<div class="container">
    <nav>
        <ul class="breadcrumb breadcrumb-pipe">
            <li class="breadcrumb-item"><a href="/admin/laporan">Laporan</a></li>
            <li class="breadcrumb-item active">Data Laporan</li>
        </ul>
    </nav>
</div>
<div class="row mt-3 ">
    <div class="col-lg-4 col-12">
        <div class="card card-bordered">
            <div class="card-inner">
                <h5 class="card-title text-center">Cari Berdasarkan Tanggal</h5>
                <div class="card-body">
                    <form action="{{ route('laporan.getLaporan') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="form" class="form-control" placeholder="tanggal awal" onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                        </div>
                        <div class="form-group">
                            <input type="text" name="to" class="form-control" placeholder="tanggal akhir" onfocusin="(this.type='date')" onfocusout="(this.type='text')">
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%">Cari Laporan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-12">
        <div class="card card-bordered">
            <div class="card-inner">
                <h5 class="card-title text-center">Data Berdasarkan Tanggal</h5>
                <div class="float-right">
                    @if ($tanggapan ?? '')
                        <a href="{{ route('laporan.cetakLaporan', ['from' => $from, 'to' => $to]) }}" class="btn btn-dim btn-outline-primary" ><em class="icon ni ni-download-cloud"></em><span class="d-none d-md-inline">Download PDF</span></a>
                    @endif
                </div>
               <div class="card-body">
                <div class="card-body">
                    @if ($tanggapan ?? '')
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Isi Laporan</th>
                                    <th>Tanggapan</th>
                                    <th>Nama Petugas</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tanggapan as $k => $v)
                                    <tr>
                                        <td>{{ $k += 1 }}</td>
                                        <td>{{ $v->tgl_pengaduan }}</td>
                                        <td>{{ $v->isi_laporan }}</td>
                                        <td>{{ $v->tanggapan }}</td>
                                        <td>{{ $v->nama_petugas }}</td>
                                        <td>
                                            @if($v->status == '0')
                                            <a href="#" class="badge badge-dot bg-danger">Pending</a>
                                            @elseif($v->status == 'proses')
                                            <a href="#" class="badge badge-dot bg-warning">Proses</a>
                                            @else
                                            <a href="#" class="badge badge-dot bg-success">Selesai</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="text-center">
                            Tidak ada data
                        </div>
                    @endif
                </div>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection