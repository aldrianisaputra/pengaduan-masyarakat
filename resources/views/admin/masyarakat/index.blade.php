@extends('layouts.admin')

@section('content')
<div class="container">
    <nav>
        <ul class="breadcrumb breadcrumb-pipe">
            <li class="breadcrumb-item"><a href="/admin/masyarakat">Masyarakat</a></li>
            <li class="breadcrumb-item active">Data Masyarakat</li>
        </ul>
    </nav>
</div>
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        
    </div>
    <div class="card card-bordered card-preview">
        <div class="card-inner">
            <table class="datatable-init-export nowrap table" data-export-title="Export">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>No. Telpon</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($masyarakat as $k => $v)
                    <tr>
                        <td>{{ $k += 1 }}</td>
                        <td>{{ $v->nik }}</td>
                        <td>{{ $v->nama }}</td>
                        <td>{{ $v->username }}</td>                        
                        <td>{{ $v->telp }}</td>   
                        <td class=""><a href="{{ route('masyarakat.show', $v->nik) }}"><em class="icon ni ni-eye"></em></a></td>                     
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div><!-- .card-preview -->
</div
@endsection