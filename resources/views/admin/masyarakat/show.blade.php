@extends('layouts.admin')

@section('content')
<div class="container">
    <nav>
        <ul class="breadcrumb breadcrumb-pipe">
            <li class="breadcrumb-item"><a href="{{ route('masyarakat.index') }}">Data masyarakat</a></li>
            <li class="breadcrumb-item active">Detail Masyarakat</li>
        </ul>
    </nav>
</div>
<div class="card card-bordered mt-4">
    <div class="card-inner">
        <table class="table">
            <tbody>
                <tr>
                    <th>NIK</th>
                    <td>:</td>
                    <td>{{ $masyarakat->nik }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>:</td>
                    <td>{{ $masyarakat->nama }}</td>
                </tr>
                <tr>
                    <th>Username</th>
                    <td>:</td>
                    <td>{{ $masyarakat->username }}</td>
                </tr>
                <tr>
                    <th>NIK</th>
                    <td>:</td>
                    <td>{{ $masyarakat->nik }}</td>
                </tr>
                <tr>
                    <th>No telepon</th>
                    <td>:</td>
                    <td>{{ $masyarakat->telp }}</td>
                </tr>
            </tbody>
        </table>        
    </div>
</div>
@endsection