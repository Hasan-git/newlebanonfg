<!doctype html>
<html class="no-js" lang="en">
    <head>
        <!-- meta -->
        <meta charset="UTF-8">
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
                                    <img src="{{ asset('images/logo.png') }}" class="logo" alt="">
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


            @section('body')
              @show



            <!-- satrt footer top section -->
            <div class="section footer-top-section">
                <div class="container-fluid footer-top-bg">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-7 bg-parent">
                            <Div class="right-bg-g"></Div>
                        </div>
                    </div><!-- bg arrow shape -->
                </div><!-- end of /. container -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h3>About Us</h3>
                                </div>
                                <div class="widget-container">
                                    <ul>
                                        <li><a href="/news">Latest News</a></li>
                                        <li><a href="/gallery">Media Gallery</a></li>
                                    </ul>
                                </div>
                            </div><!-- end of /. widget  -->
                        </div><!-- end of /. col-md-2 -->
                        <div class="col-md-2">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h3>League</h3>
                                </div>
                                <div class="widget-container">
                                    <ul>
                                        <li><a href="#">Division 1</a></li>
                                        <li><a href="#">Division 2</a></li>
                                    </ul>
                                </div>
                            </div><!-- end of /. widget  -->
                        </div><!-- end of /. col-md-2 -->
                        <div class="col-md-2">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h3>Tournament</h3>
                                </div>
                                <div class="widget-container">
                                    <ul>
                                       <li><a href="#">Super</a></li>
                                       <li><a href="#">Cup</a></li>
                                    </ul>
                                </div>
                            </div><!-- end of /. widget  -->
                        </div><!-- end of /. col-md-2 -->
                        <div class="col-md-2">
                            <div class="footer-widget">
                                <div class="widget-title">
                                    <h3>Support</h3>
                                </div>
                                <div class="widget-container">
                                    <ul>
                                       <li><a href="/soon">Advertising</a></li>
                                       <li><a href="/contact">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div><!-- end of /. widget  -->
                        </div><!-- end of /. col-md-2 -->
                        {{--<div class="col-md-4">--}}
                            {{--<div class="footer-logo">--}}
                                {{--<a href="/">--}}
                                    {{--<img src="images/logoblack.png" class="img-responsive" alt="">--}}
                                {{--</a>--}}
                            {{--</div><!-- end of /. footer logo -->--}}
                        {{--</div><!-- end of /.col -->--}}
                    </div><!-- end of /. row -->
                </div><!-- end of /. container -->
            </div><!-- end of /. footer top -->

            <!-- star footer  -->
            <div class="footer-section">
                <div class="container-fluid footer-top-bg">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-7 bg-parent">
                            <Div class="right-bg-g"></Div>
                        </div>
                    </div><!-- end of /. row -->
                </div><!-- end of /. container -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-6">
                            <div class="alignleft copyright">
                                <p>&copy; All Rights Reserved 2017. Made By <a href="http://axismea.com" target="_blank">AxisMEA</a></p>
                            </div><!-- end of /. copyright -->
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-social">
                                <p>Follow Us:</p>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </div><!-- end of /. follow  -->
                        </div> <!-- end of /. col -->
                    </div><!-- end of /. row -->
                </div><!-- end of /. container -->
            </div><!-- end of /. footer -->
        </div><!-- end /. wrapper -->


        <!-- jQuery libery -->
        <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
        <!-- jQuery Ui -->
        <script src="{{ asset('js/jquery-ui-min.js') }}"></script>
        <!-- Owl -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- Downcount -->
        <script src="{{ asset('js/jquery.downCount.js') }}"></script>
        <!-- Bootsnav -->
        <script src="{{ asset('js/bootsnav.js') }}"></script>
        <!-- Isotope -->
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <!-- prettyphoto -->
        <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
        <!-- tweetie -->
        <script src="{{ asset('scripts/Tweetie/tweetie.min.js') }}"></script>
        <!-- appear -->
        <script src="{{ asset('js/jquery.appear.js') }}"></script>
        <!-- waypoint -->
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <!-- progress bar -->
        <script src="{{ asset('js/jQuery-plugin-progressbar.js') }}"></script>
        <!-- pie chart -->
        <script src="{{ asset('js/pie-chart.js') }}" type="text/javascript"></script>
        <!-- custom -->
        <script src="{{ asset('js/custom.js') }}"></script>

        <!-- facebook like js -->
        <script>
            (function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=937758502980138";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>


    </body>
</html>
