@extends('layouts.user')

@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger">{{ $error }}</div>
@endforeach
@endif
<section id="isipengaduan">
    <div class="container-xxl py-6" style="font-family: 'Poppins', sans-serif;">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Lapmas</div>
                <h2 style="font-family: 'Poppins', sans-serif;">Laporkan Pengaduan Anda Sekarang!</h2>
                <p class="text-center mb-4">Sampaikan laporan masalah Anda di sini  kami akan
                    memprosesnya<br> dengan cepat.</p>
            </div>
            <div class="row justify-content-center">
                <div class="row justify-content-between">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12 col">
                        <div class="content wow fadeInUp" data-wow-delay="0.1s">
                            <div class="content">
                                <div class="row justify-content-center">
                                    <div class="wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="service-item rounded p-4">
                                            @if ($errors->any())
                                            @foreach ($errors->all() as $error)
                                            <div class="alert alert-danger">{{ $error }}</div>
                                            @endforeach
                                            @endif
                                        
                                            @if (Session::has('pengaduan'))
                                            <div class="alert alert-{{ Session::get('type') }}">{{ Session::get('pengaduan') }}</div>
                                            @endif

                                            <h5 style="font-family: 'Poppins', sans-serif;">Isi Pengaduan</h5>
                                            <hr>
                                            <form action="{{ route('lapmas.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row g-3">
                                                    <div class="col-12">
                                                        <div class="form-floating">
                                                            <textarea class="form-control" name="isi_laporan"
                                                                placeholder="Masukkan Isi Laporan" class="form-control"
                                                                style="height: 150px" rows="4">{{ old('isi_laporan') }}</textarea>
                                                            <label for="laporan">Isi laporan</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-floating">
                                                        <div class="form-group">
                                                            <input type="file" name="foto" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                                                    </div>
                                                </div>
                                            </form>
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
                                            <div class=" text-center" style="">
                                                <img src="{{ asset('images/user_default.svg') }}" alt="user profile" class="photo"
                                                    width="50px" style="border-radius: 50%">
                                                <div class="">
                                                    <h5 class="mt-3" style="font-family: 'Poppins', sans-serif;">
                                                        <a style="color: #6a70fc"
                                                            href="#">{{ Auth::guard('masyarakat')->user()->nama }}</a>
                                                    </h5>
                                                    <p class="text-dark">{{ Auth::guard('masyarakat')->user()->nik }}</p>
                                                </div>
                                                <div class="row text-center">
                                                    <div class="col">
                                                        <p class="italic mb-0">Terverifikasi</p>
                                                        <div class="text-center">
                                                            {{-- {{ $hitung[0] }} --}}
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <p class="italic mb-0">Proses</p>
                                                        <div class="text-center">
                                                            {{-- {{ $hitung[1] }} --}}
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <p class="italic mb-0">Selesai</p>
                                                        <div class="text-center">
                                                            {{-- {{ $hitung[2] }} --}}
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
        </div>
    </div>
</section>
@endsection