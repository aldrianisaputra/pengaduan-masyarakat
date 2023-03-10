@extends('layouts.admin')

@section('content')

<div class="div">
    
</div>
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
        </div>
    </div>
    
    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <div class="div ml-auto mb-3">
                <a href="{{ route('petugas.create') }}" class="btn btn-dim btn-outline-primary"><em class="icon ni ni-user-add" ></em></a>
            </div>
            <table class="datatable-init-export nowrap table" data-export-title="Export">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Petugas</th>
                        <th>Username</th>
                        <th>Telp</th>
                        <th>Level</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($petugas as $k => $v)
                   <tr>
                    <td> {{ $k += 1 }}</td>
                    <td> {{ $v ->nama_petugas }}</td>
                    <td> {{ $v ->username }}</td>
                    <td> {{ $v ->telp }}</td>
                    <td> {{ $v ->level }}</td>
                    <td class=""><a href="{{ route('petugas.edit', $v->id_petugas) }}"><em class="icon ni ni-eye" title="view detail"></em></a></td>
                   </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div><!-- .card-preview -->
</div>
@endsection