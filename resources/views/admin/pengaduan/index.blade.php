@extends('layouts.admin')

@section('Data Pengaduan')

@section('content')

<div class="container">
    <nav>
        <ul class="breadcrumb breadcrumb-pipe">
            <li class="breadcrumb-item"><a href="/admin/pengaduan">Pengaduan</a></li>
            <li class="breadcrumb-item active">Data Pengaduan</li>
        </ul>
    </nav>
</div>
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
         
        </div>
    </div>
    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <table class="datatable-init-export nowrap table" data-export-title="Export">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Deskripsi Laporan</th>
                        <th>Status</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengaduan as $k => $v)
                    <tr>
                       <td>{{ $k += 1 }}</td>
                       <td>{{ $v->tgl_pengaduan}}</td>
                       <td>{{ $v->isi_laporan }}</td>
                       <td>
                        @if($v->status == '0')
                            <a href="#" class="badge badge-dot bg-danger">Pending</a>
                        @elseif($v->status == 'proses')
                            <a href="#" class="badge badge-dot bg-warning">Proses</a>
                        @else
                            <a href="#" class="badge badge-dot bg-success">Selesai</a>
                        @endif
                       </td>
                       <td class=""><a href="{{ route('pengaduan.show', $v->id_pengaduan) }}"><em class="icon ni ni-eye"></em></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div><!-- .card-preview -->
</div>
@endsection