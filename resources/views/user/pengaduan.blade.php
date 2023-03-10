@extends('layouts.user')

@section('content')

<meta charset="utf-8">
<title>Lapmas!</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">

<!-- Favicon -->
<link href="assets/img/favicon.ico" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
    rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="assets/lib/animate/animate.min.css" rel="stylesheet">
<link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="assets/css/style.css" rel="stylesheet">
@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger">{{ $error }}</div>
@endforeach
@endif
<div class="container" id="lihatpengaduan">
    <div class="mx-auto text-center wow fadeInUp mb-4" data-wow-delay="0.1s" style="max-width: 600px;">
        <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Lapmas</div>
        <h2 class="">Pengaduan SAYA</h2>
    </div>
    <div class="row justify-content-between">
        <div class="col-lg-8 col-md-12 col-sm-12 col-12 col">
            <div class="content wow fadeInUp" data-wow-delay="0.1s">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded p-4">
                                <div class="row mt-5">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Foto</th>
                                                <th scope="col">Tanggal</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pengaduan as $k => $v)
                                            <tr class="text-gray-700 dark:text-gray-400">
                                                <td class="px-4 py-3">
                                                    <img src="{{ Storage::url($v->foto) }}"
                                                        alt="{{ 'Gambar '.$v->judul_laporan }}" class="gambar-lampiran"
                                                        width="50px">
                                                </td>
                                                <td class="px-4 py-3 text-sm">
                                                    {{ $v->created_at->format('l, d F Y - H:i:s') }}
                                                    <p>{{ $v->tgl_pengaduan}}</p>
                                                </td>
                                                @if ($v->status == '0')
                                                <td class="px-4 py-3 text-xs">
                                                    <span class="badge badge-pill badge-danger">
                                                        <p class="text-danger">Pending</p>
                                                    </span>
                                                </td>
                                                @elseif ($v->status =='proses')
                                                <td class="px-4 py-3 text-xs">
                                                    <p class="text-warning">{{ ucwords($v->status) }}</p>
                                                </td>
                                                @else
                                                <td class="px-4 py-3 text-xs">
                                                    <span <p class="text-success">{{ ucwords($v->status) }}</p>
                                                    </span>
                                                </td>
                                                @endif
                                                <td>
                                                    <div>
                                                        <a href="{{ $v->id_pengaduan}}" data-bs-target="#exampleModal"
                                                            data-bs-toggle="modal" aria-haspopup="true"
                                                            aria-expanded="false"
                                                            class="btn btn-primary flex items-center justify-between  text-sm font-medium leading-5 text-white rounded-lg dark:text-white-400 focus:outline-none focus:shadow-outline-gray">
                                                            Detail
                                                        </a>
                                                    </div>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"></h5>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <table class="table ">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td colspan="2"
                                                                                    style="background: #e7eaec;">
                                                                                    <h5
                                                                                        class="text-uppercase text-center">
                                                                                        DETAIL PENGADUAN</h5>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="30%">Tanggal kejadian : </td>
                                                                                <td width="70%">
                                                                                    {{ $v->created_at->format('l, d F Y - H:i:s') }}
                                                                                    <?</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="30%">NIK : </td>
                                                                                <td width="70%">{{ $v->nik }}<?</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="30%">Laporan : </td>
                                                                                <td width="70%">{{ $v->isi_laporan }}<?</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="30%">Laporan : </td>
                                                                                <td width="70%"> <img src="{{ Storage::url($v->foto) }}"
                                                                                alt="{{ 'Gambar '.$v->judul_laporan }}" class="gambar-lampiran"
                                                                                  width="150px"><?</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2"
                                                                                    style="background: #e7eaec;">
                                                                                    <h5
                                                                                        class="text-uppercase text-center">
                                                                                        TANGGAPAN</h5>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 col-12 col">
            <div class="content">
                <div class="row justify-content-center">
                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded">
                            <div class="p-3">
                                <div class=" text-center">
                                    <img src="{{ asset('images/user_default.svg') }}" alt="user profile" class="photo"
                                        width="50px" style="border-radius: 50%">
                                    <div class="">
                                        <h5><a style="color: #6a70fc"
                                                href="#">{{ Auth::guard('masyarakat')->user()->nama }}</a>
                                        </h5>
                                        <p class="text-dark">
                                            {{ Auth::guard('masyarakat')->user()->nik }}
                                        </p>
                                    </div>
                                    <div class="row text-center">
                                        <div class="col">
                                            <p class="italic mb-0">Terverifikasi</p>
                                            <div class="text-center">
                                                {{ $hitung[0] }}
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="italic mb-0">Proses</p>
                                            <div class="text-center">
                                                {{ $hitung[1] }}
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="italic mb-0">Selesai</p>
                                            <div class="text-center">
                                                {{ $hitung[2] }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <a class="service-btn" href="">
                                    <i class="fa fa-edit"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
