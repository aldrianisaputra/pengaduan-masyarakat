@extends('layouts.admin')

@section('content')
<div class="row text-center">
    <div class="col-lg-4">
        <div class="card text-white bg-primary">
            <div class="card-header">Petugas</div>
            <div class="card-inner">
                <h3 class="text-center">{{ $petugas }}</h3>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card text-black bg-light">
            <div class="card-header">Masyarakat</div>
            <div class="card-inner">
                <h3 class="text-center">{{ $masyarakat }}</h3>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card text-white bg-warning">
            <div class="card-header">Pengaduan Proses</div>
            <div class="card-inner">
                <h3 class="text-center">{{ $proses }}</h3>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mt-3">
        <div class="card text-white bg-success">
            <div class="card-header">Pengaduan Selesai</div>
            <div class="card-inner">
                <h3 class="text-center">{{ $selesai }}</h3>
            </div>
        </div>
    </div>
</div>
@endsection