<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="/../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">

    <!-- Page Title  -->
    <title>Halaman Petugas</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="/../assets2/css/dashlite.css?ver=3.1.2">
    <link id="skin-default" rel="stylesheet" href="/../assets2/css/theme.css?ver=3.1.2">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" type="text/css" href="/../assets2/css/libs/fontawesome-icons.css">

    <!-- Themify Icons -->
    <link rel="stylesheet" type="text/css" href="/../assets2/css/libs/themify-icons.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" type="text/css" href="/../assets2/css/libs/bootstrap-icons.css">

    {{-- font google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
        .card-title{
            font-family: 'Poppins', sans-serif;
            font-weight: normal;
        }
    </style>
</head>

<body class="nk-body npc-default has-apps-sidebar has-sidebar ">

    <div class="nk-app-root">
        <div class="nk-apps-sidebar is-dark">
            <div class="nk-apps-brand">
                <a href="html/index.html" class="logo-link">
                    <img class="logo-light logo-img" src="./images/logo-small.png" srcset="./images/logo-small2x.png 2x"
                        alt="logo">
                    <img class="logo-dark logo-img" src="./images/logo-dark-small.png"
                        srcset="./images/logo-dark-small2x.png 2x" alt="logo-dark">
                </a>
            </div>
            <div class="nk-sidebar-element">
                <div class="nk-sidebar-body">
                    <div class="nk-sidebar-content" data-simplebar>
                        <div class="nk-sidebar-menu">
                            <!-- Menu -->
                            <ul class="nk-menu apps-menu">
                                <li class="nk-menu-item">
                                    <a href="{{ route('dashboard.index') }}" class="nk-menu-link" title="Dashboard">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-hr"></li>
                                
                                
                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                                        class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-app-name">
                                <div class="nk-header-app-logo">
                                    <em class="icon ni ni-dashlite bg-purple-dim"></em>
                                </div>
                                <div class="nk-header-app-info">
                                    <span class="sub-text">DashLite</span>
                                    <span class="lead-text">Dashboard</span>
                                </div>
                            </div>

                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown hide-mb-sm">
                                        <a data-bs-toggle="modal" href="#region" class="nk-quick-nav-icon"><em
                                                class="icon ni ni-globe"></em></a>
                                    </li>
                                    
                                    
                                    <li class="dropdown language-dropdown d-none d-sm-block me-n1">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                            <div class="quick-icon border border-light">
                                                <img class="icon" src="./images/flags/english-sq.png" alt="">
                                            </div>
                                        </a>
                                        
                                    </li><!-- .dropdown -->
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>AB</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span
                                                            class="lead-text">{{ Auth::guard('admin')->user()->nama_petugas }}</span>
                                                        <span
                                                            class="sub-text">{{ Auth::guard('admin')->user()->username }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                  
                                                    <li><a class="dark-switch" href="#"><em
                                                                class="icon ni ni-moon"></em><span>Dark Mode</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{ route('admin.logout') }}"><em
                                                                class="icon ni ni-signout"></em><span>Sign
                                                                out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- main header @e -->
                <div class="nk-sidebar" data-content="sidebarMenu">
                    <div class="nk-sidebar-inner" data-simplebar>
                        <ul class="nk-menu nk-menu-md">
                            <li class="nk-menu-heading">
                                <h6 class="overline-title text-primary-alt">Dashboards</h6>
                            </li><!-- .nk-menu-heading -->
                            @if (Auth::guard('admin')->user()->level == 'admin')
                            <li class="nk-menu-item">
                                <a href="{{ route('dashboard.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{ route('pengaduan.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-speed"></em></span>
                                    <span class="nk-menu-text">Pengaduan</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{ route('petugas.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-user-list-fill"></em></span>
                                    <span class="nk-menu-text">Petugas</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{ route('masyarakat.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                    <span class="nk-menu-text">Masyarakat</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            <li class="nk-menu-item">
                                <a href="{{ route('laporan.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="fs-20px far fa-folder-open"></em></span>
                                    <span class="nk-menu-text">Laporan</span>
                                </a>
                            </li><!-- .nk-menu-item -->
                            @elseif(Auth::guard('admin')->user()->level == 'petugas')
                            <li class="nk-menu-item">
                                <a href="{{ route('dashboard.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ route('pengaduan.index') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon"><em class="icon ni ni-speed"></em></span>
                                    <span class="nk-menu-text">Pengaduan</span>
                                </a>
                            </li>
                            @endif
                        </ul><!-- .nk-menu -->
                    </div>
                </div>
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">


                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->

    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div><!-- .modal -->
    <!-- JavaScript -->
    <script src="/../assets2/js/bundle.js?ver=3.1.2"></script>
    <script src="/../assets2/js/scripts.js?ver=3.1.2"></script>

    <!-- JavaScript -->
    
    <script src="/../assets2/js/libs/datatable-btns.js?ver=3.1.2"></script>
    <script src="/../assets2/libs/datatable-btns.js"></script>
</body>

</html>
