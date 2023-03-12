<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Laporan Pengaduan</title>

    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
        @page{
            margin: 50px;
        }
        th{
            /* font-size: 50px */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif
        }
    </style>
</head>
<body>
    {{-- <img class="img-fluid mb-4 " src="assets/img/done (2).png" alt="" > --}}
    <div class="text-center">
        <h3 style="font-family: 'Poppins', sans-serif;">Laporan Pengaduan Masyarakat</h3>
        <h6 style="font-family: 'Poppins', sans-serif;" class="mb-5">by Adminstrator</h6>
        
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th style="font-family: 'Poppins', sans-serif;">No</th>
                <th>Tanggal</th>
                <th>Isi Laporan</th>
                <th>Tanggapan</th>
                <th>Nama Petugas</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tanggapan as $k => $v)
                <tr>
                    <td>{{ $k += 1 }}</td>
                    <td>{{ $v->tgl_pengaduan}}</td>
                    <td>{{ $v->isi_laporan }}</td>
                    <td>{{ $v->tanggapan }}</td>
                    <td>{{ $v->nama_petugas }}</td>
                    <td>{{ $v->status == '0' ? 'Pending' : ucwords($v->status) }}</td>
                </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>