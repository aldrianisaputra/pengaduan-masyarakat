@extends('layouts.admin')

@section('content')

<link rel="stylesheet" href="../assets2/css/dashlite.css?ver=3.1.2">
<link id="skin-default" rel="stylesheet" href="../assets2/css/theme.css?ver=3.1.2">
<div class="container">
    <nav>
        <ul class="breadcrumb breadcrumb-pipe">
            <li class="breadcrumb-item"><a href="{{ route('petugas.index') }}">Data Petugas</a></li>
            <li class="breadcrumb-item active">Edit Petugas</li>
        </ul>
    </nav>
</div>
<div class="card card-bordered mt-4">
    <div class="card-inner">
        <form action="{{ route('petugas.update', $petugas->id_petugas) }}" method="POST"
            class="form-validate is-alter">
            @csrf
            @method('PATCH')
            <div class="row g-gs">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="nama_petugas">Nama Petugas</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" value="{{ $petugas->nama_petugas }}"
                                id="nama_petugas" name="nama_petugas" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="username">Username</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="username" value="{{ $petugas->username }}"
                                name="username" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <div class="form-control-wrap">
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="fv-phone">No Telpon</label>
                        <div class="form-control-wrap">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="telp">+62</span>
                                </div>
                                <input type="number" class="form-control" name="telp" value="{{ $petugas->telp }}"
                                    required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="level">Level</label>
                        <div class="form-control-wrap ">
                            <select class="form-select js-select2" id="level" name="level"
                                data-placeholder="Select a option" required>
                                @if ($petugas->level == 'admin')
                                <option selected value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                                @else
                                <option value="admin">Admin</option>
                                <option selected value="petugas">Petugas</option>
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-warning" > <em class="icon ni ni-edit-fill"></em>Update</button>
                    </div>
                </div>
            </div>
        </form>

        
        @if ($petugas->id_petugas != 1)
        <form action="{{ route('petugas.destroy', $petugas->id_petugas) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-lg btn-danger mt-1"onclick="return confirm('Yakin Menghapus?')"><em class="icon ni ni-trash-fill"></em>Hapus</button>
        </form>
        @endif
        
    </div>
</div>
@endsection
