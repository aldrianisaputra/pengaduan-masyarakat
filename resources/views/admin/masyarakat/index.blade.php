@extends('layouts.admin')

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Data Table with Export</h4>
        </div>
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