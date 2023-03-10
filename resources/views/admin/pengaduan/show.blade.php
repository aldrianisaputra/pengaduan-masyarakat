@extends('layouts.admin')

@section('detail pengaduan')
@section('content')
<div class="container">
    <nav>
        <ul class="breadcrumb breadcrumb-pipe">
            <li class="breadcrumb-item"><a href="{{ route('pengaduan.index') }}">Data Pengaduan</a></li>
            <li class="breadcrumb-item active">Detail Pengaduan</li>
        </ul>
    </nav>
</div>
<div class="row mt-3 ">
    <div class="col-lg-6 col-12">
        <div class="card card-bordered">
            <div class="card-inner">
                <h5 class="card-title text-center">Pengaduan Masyarakat</h5>
                <div class="card-body">
                    <table class="table">
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
                            <td><img src="{{ Storage::url($pengaduan->foto) }}" alt="Foto Pengaduan" srcset=""></td>
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
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-12">
        <div class="card card-bordered">
            <div class="card-inner">
                <h5 class="card-title text-center">Tanggapan Petugas</h5>
                <div class="card-body">
                    <form action="{{ route('tanggapan.createOrUpdate') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id_pengaduan" value="{{ $pengaduan->id_pengaduan }}">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <div class="input-group mb-3">
                                <select name="status" id="status" class="custom-select">
                                    @if ($pengaduan->status == '0')
                                    <option selected value="0">Pending</option>
                                    <option value="proses">Proses</option>
                                    <option value="selesai">Selesai</option>
                                    @elseif($pengaduan->status =='proses')
                                    <option value="0">Pending</option>
                                    <option selected value="proses">Proses</option>
                                    <option value="selesai">Selesai</option>
                                    @else
                                    <option value="0">Pending</option>
                                    <option value="proses">Proses</option>
                                    <option selected value="selesai">Selesai</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggapan">Tanggapan</label>
                            <textarea name="tanggapan" id="tanggapan" rows="4" placeholder="belum ada tanggapan" class="form-control">{{ $tanggapan->tanggapan ??'' }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                    @if (Session::has('status'))
                        <div class="alert alert-success mt-2">
                            {{ Session::get('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
