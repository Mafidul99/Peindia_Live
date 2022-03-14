<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', ' Peindia Live') }} | | @yield('title') </title>

    <link rel="stylesheet" href="{{asset('assets')}}/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/elegant-line-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/meanmenu.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/swipebox.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/main.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <script src="{{asset('assets')}}/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- Preloader Strat-->
    <div id='preloader'>
        <div class='loader'>
            <img src="{{asset('assets')}}/img/logo/loader.png" width="200" alt="Loader image">
        </div>
    </div>
    <!-- Preloader -->
    <header id="header" class="header sticky-header">
        <div class="top-header bg-dark">
            <div class="container">
                <div class="col-md-6">
                    <ul class="top-info">
                        <li><i class="ti-mobile"></i> 1800300030030</li>
                        <li><a href="mailto:support@peindianews.com"><i class="ti-email"></i> support@peindianews.com</a></li>
                    </ul>
                </div>
                <div class="col-md-6 text-right sm-text-left">
                    <ul class="top-social">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-twitter"></i></a></li>
                        <li><a href="#"><i class="ti-google"></i></a></li>
                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                        <li class="fz-13">Thousday Jan 5 , 2022</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /.top-header -->
        <div class="mid-header">
            <div class="container">
                <div class="site-branding full-left">
                    <a href="{{url('/')}}"><img src="{{asset('assets')}}/img/logo/logo_news.png" alt="Peindianews"></a>
                </div>
                <!-- /.site-branding -->
                <div class="banner pull-right">
                    <a href="{{url('/')}}"><img src="{{asset('assets')}}/img/banner.jpg" alt="Peindianews Banner"></a>
                </div>
                <!-- /.banner -->
            </div>
        </div>
        <!-- /.mid-header -->
        <div class="mainmenu-wrap bg-red">
            <div class="container">
                <div class="col-md-9 col-xs-6">
                    <div class="menu-wrap mean-menu">
                        <nav class="mainmenu">
                            <ul id="navi-menu">
                                <li class="current_page_item"><a href="{{url('/')}}">Home</a></li>
                                <li><a href="#">Health</a>
                                    <ul>
                                        <li><a href="{{url('/')}}">News Health1</a></li>
                                        <li><a href="{{url('/')}}">News Health2</a></li>
                                        <li><a href="{{url('/')}}">News Health3</a></li>
                                        <li><a href="{{url('/')}}">News Health4</a></li>
                                        <li><a href="{{url('/')}}">News Health5</a></li>
                                    </ul>
                                    </li>
                                <li><a href="#">Entertainment</a>
                                    <ul>
                                        <li><a href="{{url('/')}}">News Entertainment1</a></li>
                                        <li><a href="{{url('/')}}">News Entertainment2</a></li>
                                        <li><a href="{{url('/')}}">News Entertainment3</a></li>
                                        <li><a href="{{url('/')}}">News Entertainment4</a></li>
                                        <li><a href="{{url('/')}}">News Entertainment5</a></li>
                                    </ul>
                                    </li>
                                <li><a href="#">World</a>
                                    <ul>
                                        <li><a href="{{url('/')}}">News World1</a></li>
                                        <li><a href="{{url('/')}}">News World2</a></li>
                                        <li><a href="{{url('/')}}">News World3</a></li>
                                        <li><a href="{{url('/')}}">News World4</a></li>
                                        <li><a href="{{url('/')}}">News World5</a></li>
                                    </ul>
                                    </li>
                                    <li><a href="#">Project</a>
                                    <ul>
                                        <li><a href="{{url('/')}}">News Project1</a></li>
                                        <li><a href="{{url('/')}}">News Project2</a></li>
                                        <li><a href="{{url('/')}}">News Project3</a></li>
                                        <li><a href="{{url('/')}}">News Project4</a></li>
                                        <li><a href="{{url('/')}}">News Project5</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('/about_us')}}">About Us</a></li>
                                <li><a href="{{url('/contact_us')}}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <form action="#" class="search-form">
                        <input type="text" placeholder="Search news..">
                        <button class="submit" type="submit"><i class="ti-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu"></div>
            </div>
        </div>
        <!-- /.mainmenu-wrap -->
    </header>
    <!-- /.header -->
