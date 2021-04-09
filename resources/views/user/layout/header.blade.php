<!doctype html>
<html class="no-js" lang="">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/OwlCarousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/OwlCarousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/meanmenu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/ie-only.css')}}">
    <script src="{{asset('js/modernizr-2.8.3.min.js')}}"></script>
</head>
<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an 
        <strong>outdated</strong> browser. Please 
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
    </p>
    <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="bg-dark-layout" style="background-image: url('{{asset('img/banner/section-background.png')}}');">
        <!-- Header Area Start Here -->
        <header>
            <div id="header-layout1" class="header-style1">
                <div class="main-menu-area bg-primarytextcolor header-menu-fixed" id="sticker">
                    <div class="container">
                        <div class="row no-gutters d-flex align-items-center">
                            <div class="col-lg-1 d-none d-lg-block">
                                <div class="logo-area">
                                    <a href="{{route('home')}}">
                                        <img src="img/logo.png" alt="logo" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6 position-static min-height-none">
                                <div class="ne-main-menu">
                                    <nav id="dropdown">
                                        <ul>
                                            <li class="active">
                                                <a href="{{route('home')}}">Home</a>
                                            </li>
                                            
                                            @foreach ($theloai ?? '' as $item)
                                            <li>
                                                <a href="">
                                                    {{$item->TenTheLoai}}
                                                </a>
                                                <ul class="ne-dropdown-menu">
                                                   
                                                    @foreach ($loaitin as $row)
                                                    @if ($row->idTL == $item->idTL)
                                                    <li>
                                                        <a href="">
                                                            {!!$row->TenLoaiTin!!}
                                                        </a>
                                                    </li>
                                                    @endif
                                                    @endforeach
                                                    
                                                </ul>
                                            </li>
                                            @endforeach
                                           
                                           
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-3 col-md-12 text-right position-static">
                                <div class="header-action-item">
                                    <ul>
                                        <li>
                                            <form id="top-search-form" class="header-search-light">
                                                <input type="text" class="search-input" placeholder="Search...." required="" style="display: none;">
                                                <button class="search-button">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </button>
                                            </form>
                                        </li>
                                        
                                        <li class="login">
                                            @yield('login-account')
                                            {{-- <button type="button" class="login-btn" data-toggle="modal" data-target="">
                                                <a href="{{route('Login')}}">
                                                <i class="fa fa-user" aria-hidden="true"></i>Login
                                                </a>
                                            </button> --}}
                                            
                                        </li>
                                        <li class="register">
                                            @yield('register-logout')
                                            {{-- <button type="button" class="login-btn" data-toggle="modal" data-target="">
                                                <a href="{{route('Register')}}">
                                                    <i class="fa fa-user" aria-hidden="true"></i>Register
                                                </a>
                                            </button> --}}
                                            
                                        </li>
                                        {{-- <li>

                                            <button type="button" class="login-btn" data-toggle="modal" data-target="">
                                                <a href="{{route('Logout')}}">
                                                    <i class="fa fa-user" aria-hidden="true"></i>Logout
                                                </a>
                                            </button>
                                            
                                        </li> --}}
                                        
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header Area End Here -->
    