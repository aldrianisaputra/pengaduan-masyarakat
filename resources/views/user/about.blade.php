@extends('layouts.sub')

@section('content')
@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-danger">{{ $error }}</div>
@endforeach
@endif
<div class="container-xxl bg-primary page-header">
    <div class="container text-center">
        <h1 class="text-white animated zoomIn mb-3">Tentang Kami</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="/dashboard">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Tentang Kami</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container" id="lihatpengaduan">
    <div class="row justify-content-between">
        <div class="col-lg-12">
            <div class="content wow fadeInUp" data-wow-delay="0.1s">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-item rounded p-4">
                                <div class="card-body">
                                    <div class="section-title" data-aos="fade-up">
                                      
                                      </div>
                              
                                      <div class="row content">
                                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
                                          <p>
                                            <h3>LaporKuy!</h3> LaporKuy! adalah sistem laporan pengaduan masyarakat yang dibuat untuk memudahkan masyarakat untuk memberikan laporan pengaduan untuk bisa cepat diselesaikan
                                          </p>
                                          <ul>
                                            <h3>Tujuan LaporKuy!</h3>
                                            <li><i class="ri-check-double-line"></i>Memberikan Informasi atau laporan yang jelas kepada petugas yang berwenang supaya bisa ditindak lebih lanjut</li>
                                            <li><i class="ri-check-double-line"></i>Mempermudah masyarakat untuk memberi pengaduan atau pelaporan dengan petugas berwenang</li>
                                          </ul>
                                        </div>
                                        <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                                          <p>
                                            <h4>LaporKuy!</h4>merupakan komitmen  kami untuk melayani masyarakat. Dengan hadirnya sistem pelaporan pengaduan online ini, diharapkan setiap suara masyarakat bisa didengar dan ditindaklanjuti oleh pihak yang berwenang.
                                          </p>
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
</div>



@endsection
