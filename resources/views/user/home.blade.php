@extends('layouts.user')

@section('content')
    <!-- Team Start -->
   <section id="tatacara">
    <div class="container-xxl py-6" style="font-family: 'Poppins', sans-serif;">
        <div class="container">
            <div class="mx-auto text-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-inline-block border rounded-pill text-primary px-4 mb-3">Lapmas</div>
                <h2 class="mb-5" style="font-family: 'Poppins', sans-serif;">Tata Cara</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <h5 class="mb-4">Kirim Laporan</h5>
                        <img class="img-fluid mb-4" src="assets/img/tatacara1.png" alt="" >
                        <div class="d-flex justify-content-center">
                            <p>Tulis laporan keluhan Anda dengan jelas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <h5>Proses Verifikasi</h5>
                        <img class="img-fluid mb-4 " src="assets/img/tatacara2.png" alt="" >
                        <div class="d-flex justify-content-center">
                            <p>Tunggu sampai laporan Anda di verifikasi oleh admin/petugas.</p>
                        </div>
                    </div>
                </div>              
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <h5>Tindak Lanjut</h5>
                        <img class="img-fluid mb-4 " src="assets/img/tatacara3.png" alt="" >
                        <div class="d-flex justify-content-center">
                            <p>Laporan Anda sedang dalam diproses dan ditindak lanjut.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <h5>Selesai</h5>
                        <img class="img-fluid mb-4 " src="assets/img/tatacara4.png" alt="" >
                        <div class="d-flex justify-content-center">
                            <p>Laporan pengaduan telah selesai ditindak.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </section>
    <!-- Team End -->
    
@endsection