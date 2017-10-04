<!doctype html>
<html class="no-js" lang="en">
<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- web site title -->
    <title>@yield('title')</title>

    <!-- favicon -->
    <link rel="icon" href="{{ asset('images/favicon.png') }}">

    <!-- style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
    <![endif]-->
</head>
<body>
<!-- START PRELOADER -->
<div id="preloader">
    <div id="loader-wrapper">
        <div class="loader1"></div>
    </div>
</div>
<!-- END OF /. PRELOADER -->

<div class="wrapper">
    <!-- START HEADER TOP SECTION -->
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    {{--<div class="header-social">--}}
                    {{--<ul>--}}
                    {{--<li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                    {{--<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>--}}
                    {{--</ul>--}}
                    {{--</div><!-- end of /. header social -->--}}
                    <div class="top-left-menu">
                        <ul>
                            <li><a href="/contact">Contact</a></li>
                            <li><a href="/soon">Advertising</a></li>
                            {{-- <li> <a href="#"><i class="fa fa-lock"></i> Sign Up </a>or<a href="#">   Login</a></li> --}}
                        </ul>
                    </div><!-- end of /. top left menu -->
                </div>
                <div class="col-md-6">
                    <div class="header-right-menu">

                        <div class="attr-nav">
                            <ul>
                                <li class="search">
                                    <form action="/soon">
                                        <input type="text" name="search" placeholder="Search"  />
                                        <button><i class="fa fa-search"></i></button>
                                    </form>
                                </li>
                            </ul>
                        </div><!-- end of /. header search button -->

                    </div><!-- end of /. header top right menu -->
                </div><!-- end of /. col -->
            </div><!-- end of /. row -->
        </div><!-- end of /. container -->
    </div><!-- END OF /. HEADER TOP SECTION -->

    <div class="header-section">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default cart">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed top-m-btn" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logodiv">
                        <a class="" href="/">
                            <img src="images/logo.png" class="logo" alt="">
                        </a>
                    </div>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse top-nav" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">ABOUT</a></li>
                        <li><a href="/news">NEWS</a></li>
                        <li><a href="/clubs">Clubs</a></li>

                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Stats <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/matches">Matches</a></li>
                                <li><a href="/ranks">Rank tables</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Media <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="/gallery">Gallery</a></li>
                                <li><a href="/soon">Videos</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- end of /. container -->
        </nav><!-- End Navigation -->

    </div><!-- end of /. nav area-->
    <!-- End Navigation -->


@section('show')
@show