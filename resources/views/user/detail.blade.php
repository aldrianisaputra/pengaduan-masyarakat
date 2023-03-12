@extends('layouts.sub')

@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger">{{ $error }}</div>
@endforeach
@endif
<div class="container-xxl bg-primary page-header">
    <div class="container text-center">
        <h1 class="text-white animated zoomIn mb-3" style="     font-family: 'Poppins', sans-serif;">Detail Pengaduan</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="/dashboard">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Detail</li>
            </ol>
        </nav>
    </div>
</div>
<div class="container" id="lihatpengaduan">
    <div class="row justify-content-between">
        <div class="col-lg-12">
            <div class="content wow fadeInUp" data-wow-delay="0.1s">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded p-4">
                                <div class="card-body">
                                    <table class="table">
                                        <tr>
                                            <td colspan="5"
                                            style="background: #e7eaec;  width:100%;">
                                            <h5
                                                class="text-uppercase text-center">
                                                Pengaduan</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>NIK</th>
                                            <td>:</td>
                                            <td>{{ $pengaduan->nik }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Pengaduan</th>
                                            <td>:</td>
                                            <td>{{ $pengaduan->tgl_pengaduan }}</td>
                                        </tr>
                                        <tr>
                                            <th>Foto Kejadian</th>
                                            <td>:</td>
                                            <td><img src="{{ Storage::url($pengaduan->foto) }}" alt="Foto Pengaduan" width="100px"></td>
                                        </tr>
                                        <tr>
                                            <th>Deskripsi Laporan</th>
                                            <td>:</td>
                                            <td>{{ $pengaduan->isi_laporan }}</td>
                                        </tr>
                                        <tr>
                                            <th>Status</th>
                                            <td>:</td>
                                            <td>
                                                @if($pengaduan->status == '0')
                                                <a href="#" class="badge badge-dot bg-danger">Pending</a>
                                                @elseif($pengaduan->status == 'proses')
                                                <a href="#" class="badge badge-dot bg-warning">Proses</a>
                                                @else
                                                <a href="#" class="badge badge-dot bg-success">Selesai</a>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5"
                                            style="background: #e7eaec;  width:100%;" class="mt-5">
                                            <h5
                                                class="text-uppercase text-center">
                                                Tanggapan</h5>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tanggapan</th>
                                            <td>:</td>
                                            <td>
                                                @if (empty($tanggapan->tanggapan))
                                                Belum ada tanggapan
                                                @else
                                                {{ $tanggapan->tanggapan}}
                                                @endif
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
