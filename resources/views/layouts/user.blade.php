<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Lapmas!</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Mochiy+Pop+One&family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0" style="font-family: 'Poppins', sans-serif;">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.html" class="navbar-brand p-0">
                    <h1 class="m-0"></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        @if(Auth::guard('masyarakat')->check())
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <div class="navbar-nav ms-auto py-0">
                                <a href="{{ route('lapmas.dashboard') }}" class="nav-item nav-link ">Home</a>
                                <a href="{{ route('lapmas.pengaduan', 'me') }}" class="nav-item nav-link">Laporan</a>
                                <a href="service.html" class="nav-item nav-link">Service</a>
                                <a href="contact.html" class="nav-item nav-link">Contact</a>
                            </div>
                            <a href="{{ route('lapmas.logout') }}"
                                class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">LOG OUT
                            </a>    
                        </div>
                        </ul>
                        @else
                        <div class="collapse navbar-collapse" id="navbarCollapse">
                            <div class="navbar-nav ms-auto py-0">
                                <a href="/" class="nav-item nav-link ">Home</a>
                                <a href="#tatacara" class="nav-item nav-link">Tata Cara</a>
                            </div>
                            <a href="{{ route('lapmas.formLogin') }}"
                            class="btn btn-light rounded-pill text-primary py-2 px-4 ms-lg-5">Log In</a>
                        </div>
                        @endauth                        
                    </div>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header" style="">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        @if(Auth::guard('masyarakat')->check())
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn">Welcome {{ Auth::guard('masyarakat')->user()->nama }}!</h1>
                            <p class="text-white pb-3 animated zoomIn">Silahkan Isi Pengaduan Anda</p>
                            <a href="#isipengaduan"
                                class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Isi Pengaduan</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="../assets/img/heroo.png" alt="">
                        </div>
                        @else
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated zoomIn" style="font-family: 'Poppins', sans-serif; font-size:50px ">Layanan Pengaduan Online Masyarakat</h1>
                            <p class="text-white pb-3 animated zoomIn">Sampaikan laporan masalah Anda di sini, kami akan
                                memprosesnya dengan cepat.</p>
                            <a href="{{ route('lapmas.formRegister') }}"
                                class="btn btn-outline-light rounded-pill border-2 py-3 px-5 animated slideInRight">Regis
                                Here</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="assets/img/heroo.png" alt="">
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        {{-- contect --}}

        @yield('content')

        {{-- content end --}}


        <!-- Footer Start -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#A3ADFF" fill-opacity="1"
                d="M0,96L24,122.7C48,149,96,203,144,218.7C192,235,240,213,288,181.3C336,149,384,107,432,106.7C480,107,528,149,576,138.7C624,128,672,64,720,53.3C768,43,816,85,864,96C912,107,960,85,1008,106.7C1056,128,1104,192,1152,208C1200,224,1248,192,1296,176C1344,160,1392,160,1416,160L1440,160L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z">
            </path>
        </svg>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/lib/wow/wow.min.js"></script>
    <script src="../assets/lib/easing/easing.min.js"></script>
    <script src="../assets/lib/waypoints/waypoints.min.js"></script>
    <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="../assets/js/main.js"></script>
</body>

</html>
