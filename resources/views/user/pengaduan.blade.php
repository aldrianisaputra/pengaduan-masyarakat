@extends('layouts.sub')

@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger">{{ $error }}</div>
@endforeach
@endif
<div class="container-xxl bg-primary page-header">
    <div class="container text-center">
        <h1 class="text-white animated zoomIn mb-3" style="     font-family: 'Poppins', sans-serif;">Pengaduan Saya</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="/dashboard">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Pengaduan</li>
            </ol>
        </nav>
    </div>
</div>
@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger">{{ $error }}</div>
@endforeach
@endif
<div class="container" id="lihatpengaduan">
    <div class="mx-auto text-center wow fadeInUp mb-4" data-wow-delay="0.1s" style="max-width: 600px;">
    </div>
    <div class="row justify-content-between">
        <div class="col-lg-8 col-md-12 col-sm-12 col-12 col">
            <div class="content wow fadeInUp" data-wow-delay="0.1s">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded p-4">
                                <div class="row">
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
                                                        alt="{{ 'Gambar' }}" class="gambar-lampiran"
                                                        width="50px">
                                                </td>
                                                <td class="px-4 py-3 text-sm">
                                                    <p>{{ $v->tgl_pengaduan}}</p>
                                                </td>
                                                @if ($v->status == '0')
                                                <td class="px-4 py-3 text-xs">
                                                    <a href="#" class="badge badge-dot bg-danger">Pending</a>
                                                </td>
                                                @elseif ($v->status =='proses')
                                                <td class="px-4 py-3 text-xs">
                                                    <a href="#" class="badge badge-dot bg-warning">{{ ucwords($v->status) }}</a>
                                                </td>
                                                @else
                                                <td class="px-4 py-3 text-xs">
                                                    <a href="#" class="badge badge-dot bg-success">{{ ucwords($v->status) }}</a>
                                                </td>
                                                @endif
                                                <td>
                                                    <div>
                                                        <a href="{{ route('lapmas.detail', $v->id_pengaduan) }}"
                                                            class="btn btn-primary flex items-center justify-between  text-sm font-medium leading-5 text-white rounded-lg dark:text-white-400 focus:outline-none focus:shadow-outline-gray">
                                                            Detail
                                                        </a>
                                                    </div>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                     <!-- Modal -->
                                     <div>
                                     <div>
                                </div>
                            </div>
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
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
