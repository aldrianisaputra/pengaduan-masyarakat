@extends('layouts.admin')

@section('content')
<div class="container">
    <nav>
        <ul class="breadcrumb breadcrumb-pipe">
            <li class="breadcrumb-item"><a href="{{ route('petugas.index') }}">Data Petugas</a></li>
            <li class="breadcrumb-item active">Detail Petugas</li>
        </ul>
    </nav>
</div>
<div class="card card-bordered mt-4">
    <div class="card-inner">
        <form action="{{ route('petugas.store') }} " method="POST" class="form-validate is-alter">
            @csrf
            <div class="row g-gs">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="nama_petugas">Nama Petugas</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="nama_petugas" name="nama_petugas" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label" for="username">Username</label>
                        <div class="form-control-wrap">
                            <input type="text" class="form-control" id="username" name="username" required>
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
                                <input type="number" class="form-control" name="telp" required>
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
                                <option label="empty" value=""></option>
                                <option value="admin">Admin</option>
                                <option value="petugas">Petugas</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-4">
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="div">
            @if (Session::has('username'))
            <div class="alert alert-danger">
                {{ Session::get('username') }}
            </div>
            @endif
            @if ($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">
                {{ $error }}
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>

@endsection
