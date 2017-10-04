
@extends('layout.header')

@section('title','LFG - Player')

@section('show')


    <!-- START PAGE TITILE SECTION -->
    <div class="player-profile-section page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-title profile-title">
                        <h1>Player Profile</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="/">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="/clubs">Clubs<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="">Player Stats</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. PAGE TITLE SECTION -->

    <div class="player-carear-details">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="profile-images-match">
                        <a><img class="img-responsive" src="{{ asset('images/players/'.$player->club.'.png') }}" width="370" height="370" alt=""></a>
                        <div class="profile-details">
                            <div class="profile-pic profile-details-inner">
                                <a href="#"><img class="img-responsive" src="{{ asset('images/clubs/'.$player->club.'.png') }}" width="64" height="84" alt=""></a>
                            </div>
                            <div class="carryer-match profile-details-inner">
                                @if($perfs != 'Null')
                                    <h2>{{$perfs->matches}}</h2>
                                    <p>Matches</p>
                                @else
                                    <h2>0</h2>
                                    <p>Matches</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="player-carryer-total-des">
                        <h1 id="profile-title"><b>{{$player->PlayerName}} <span></span></b></h1>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="club-histry">
                                    <p>{{$player->history}}</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="player-other-desc-inner">
                                    <div class="player-desc-1">
                                        <div class="player-other-desc">
                                            <h1>Club Name</h1>
                                            <p>{{$player->club}}</p>
                                        </div>
                                        <div class="player-other-desc">
                                            <h1>Number</h1>
                                            <p>#{{$player->number}}</p>
                                        </div>
                                        <div class="player-other-desc">
                                            <h1>Date of Birth</h1>
                                            <p>{{$player->dob}}</p>
                                        </div>
                                    </div>

                                    <div class="player-desc-1">
                                        <div class="player-other-desc">
                                            <h1>Nationality</h1>
                                            <p><img class="flag-icon" src="{{ asset('icons/flags/4x3/'.$player->nationCode.'.svg') }}"> {{$player->Nationality}}</p>
                                        </div>
                                        <div class="player-other-desc">
                                            <h1>Position</h1>
                                            <p>{{$player->position}}</p>
                                        </div>
                                        <div class="player-other-desc">
                                            <h1>Height & Weight</h1>
                                            <p>{{$player->height}}cm , {{$player->weight}}kg</p>
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
    <div class="player-performances">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @if($perfs != 'Null')
                    <div class="player-states">
                        <h1 class="before">Performance {{$perfs->League}}</h1>
                        <div class="player-performance-inner player-performance">
                            <div class="circle-proggress-items">
                                <div id="demo-pie-1" class="pie-title-center" data-percent="{{(100*$perfs->starter)/$perfs->matches}}">
                                    <span class="pie-value"></span>
                                </div>
                                <span class="progress-content"><B>Starter</B></span>
                            </div>
                            <div class="circle-proggress-items">
                                <div id="demo-pie-2" class="pie-title-center" data-percent="{{(100*$perfs->subin)/$perfs->matches}}">
                                    <span class="pie-value"></span>
                                </div>
                                <span class="progress-content"><B>SubIn</B></span>
                            </div>
                            <div class="circle-proggress-items">
                                <div id="demo-pie-3" class="pie-title-center" data-percent="{{(100*$perfs->subout)/$perfs->matches}}">
                                    <span class="pie-value"></span>
                                </div>
                                <span class="progress-content"><B>SubOut</B></span>
                            </div>
                            <div class="circle-proggress-items">
                                <div id="demo-pie-4" class="pie-title-center" data-percent="{{(100*$perfs->goals)/$goals->goals}}">
                                    <span class="pie-value"></span>
                                </div>
                                <span class="progress-content"><B>Goals</B></span>
                            </div>
                        </div>
                    </div>
                    @else
                        <h1>No Stats!</h1>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="player-performances">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="point-table-area">
                        <div class="point-title-area">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th width="19%" scope="row">League</th>
                                    <th width="9%" class="text-center">Matches</th>
                                    <th width="9%" class="text-center">Starter</th>
                                    <th width="9%" class="text-center">SubIn</th>
                                    <th width="9%" class="text-center">Subut </th>
                                    <th width="9%" class="text-center">Minutes</th>
                                    <th width="9%" class="text-center">Goals</th>
                                    <th width="9%" class="text-center">Assists</th>
                                    <th width="9%" class="text-center">Yellow</th>
                                    <th width="9%" class="text-center">Red</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="point-itmes">
                            <table class="table table-striped-inverse point-table">
                                <tbody>
                                @if($stats != 'Null')
                                    @foreach($stats as $stat)
                                    <tr>
                                        <th data-th="League" width="19%" scope="row">
                                            <span>{{$stat->League}}</span>
                                        </th>
                                        <td data-th="Matches" width="9%" class="text-center">{{$stat->matches}}</td>
                                        <td data-th="Starter" width="9%" class="text-center">{{$stat->starter}}</td>
                                        <td data-th="SubIn" width="9%" class="text-center">{{$stat->subin}}</td>
                                        <td data-th="Subut" width="9%" class="text-center">{{$stat->subout}}</td>
                                        <td data-th="Minutes" width="9%" class="text-center">{{$stat->minutes}}</td>
                                        <td data-th="Goals" width="9%" class="text-center">{{$stat->goals}}</td>
                                        <td data-th="Assists" width="9%" class="text-center">{{$stat->assists}}</td>
                                        <td data-th="Yellow" width="9%" class="text-center">{{$stat->yellow}}</td>
                                        <td data-th="Red" width="9%" class="text-center">{{$stat->red}}</td>
                                    </tr>
                                    @endforeach
                                @else
                                    <h1>No Stats!</h1>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
<script>
    /* === circle progressbar === */
    (function($){
        $('#demo-pie-1, #demo-pie-2, #demo-pie-3, #demo-pie-4, #demo-pie-5').pieChart({
            barColor: '#fec722',
            trackColor: '#eee',
            lineCap: 'round',
            lineWidth: 2,
            animate: {
                duration: 4000,
                enabled: true
            },
            onStep: function (from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });
    })(jQuery);
</script>
</body>
</html>
@endsection
