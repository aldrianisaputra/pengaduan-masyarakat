<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Login Petugas</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets2/css/dashlite.css?ver=3.1.2">
    <link id="skin-default" rel="stylesheet" href="./assets2/css/theme.css?ver=3.1.2">
</head>

<body class="nk-body npc-default pg-auth" style="font-family: 'Poppins', sans-serif;">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content2 mt-5">
                    <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="./images/logo.png"
                                    srcset="./images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png"
                                    srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered ">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content text-center">
                                        <h4 class="nk-block-title" style="font-family: 'Poppins', sans-serif;" >LOGIN PETUGAS</h4>
                                        <div class="nk-block-des">
                                            <p>Masukan Username dan Pasword untuk petugas</p>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('admin.login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" value="{{ old('username') }}" name="username"
                                            placeholder="Username"
                                            class="form-control @error('username') is-invalid @enderror">
                                        @error('username')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Password</label>
                                        <input type="password" name="password" placeholder="Password"
                                            class="form-control @error('password') is-invalid @enderror">
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">LOG IN</button>
                                    </div>
                                </form>
                                @if (Session::has('pesan'))
                                    <div class="alert alert-danger mt-2">
                                        {{ Session::get('pesan') }}
                                    </div>
                                    @endif
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets2/js/bundle.js?ver=3.1.2"></script>
    <script src="./assets2/js/scripts.js?ver=3.1.2"></script>
    
    

</html>
