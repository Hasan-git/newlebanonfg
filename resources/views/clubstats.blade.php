
@extends('layout.header')

@section('title','LFG - ClubStats')

@section('show')

    <!-- START PAGE TITILE SECTION -->
    <div class="player-profile-section page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-title profile-title">
                        <h1>Legacy</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="/">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="/clubs">Clubs<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="">Club Stats</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. PAGE TITLE SECTION -->

    <div class="club-histry-feature-section">
        <div class="container">
            <div class="row">
                <div class="inner-container">
                    <div class="col-sm-2">
                        <div class="club-histry-img">
                            <img class="img-responsive" src="{{ asset('images/clubs/'.$clubs->TeamName.'.png') }}" alt="{{$clubs->TeamName}}">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="club-histry">
                            <h1><b>{{$clubs->TeamName}}</b> Club</h1>
                            <p>{{$clubs->history or ' '}}</p>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="club-histry">
                            <h1>Main <b>Features</b></h1>
                        </div>
                        <div class="club-details">
                            <div class="club-name club-details-inner">
                                <h1>Division</h1>
                                <p>{{$clubs->division}}</p>
                            </div>
                            <div class="coach-name club-details-inner">
                                <h1>Coach</h1>
                                <p>{{$clubs->coach or ' '}}</p>
                            </div>
                        </div>
                        <div class="club-details">
                            <div class="start-time club-details-inner">
                                <h1>Established</h1>
                                <p>Since {{$clubs->established or ' '}}</p>
                            </div>
                            <div class="president-name club-details-inner">
                                <h1>Curent President</h1>
                                <p>{{$clubs->president or ' '}}</p>
                            </div>
                        </div>
                        <div class="club-details">
                            <div class="stadium-name club-details-inner">
                                <h1>Stadium</h1>
                                <p>{{$clubs->stadium or ' '}} Stadium</p>
                            </div>
                            {{--<div class="club-social club-details-inner">--}}
                                {{--<h1>Social</h1>--}}
                                {{--<ul>--}}
                                    {{--<li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-vk"></i></a></li>--}}
                                    {{--<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <div class="clearfix">&ensp;</div>
                    <div class="player-performances">
                        <div class="col-sm-12">
                            @if($perf != 'Null')
                                <div class="player-states">
                                    <h1 class="before">Performance Starting <b>Fall 2017</b></h1>
                                    <div class="player-performance-inner player-performance">
                                        <div class="circle-proggress-items col-md-3 col-xs-6">
                                            <span class="progress-content"><B>Win</B></span>

                                            <div id="demo-pie-1" class="pie-title-center" data-percent="{{(100*$perf->wins)/$perf->matches}}">
                                                <span class="pie-value"></span>
                                            </div>
                                        </div>
                                        <div class="circle-proggress-items col-md-3 col-xs-6">
                                            <span class="progress-content"><B>Lose</B></span>
                                            <div id="demo-pie-2" class="pie-title-center" data-percent="{{(100*$perf->loses)/$perf->matches}}">
                                                <span class="pie-value"></span>
                                            </div>
                                        </div>
                                        <div class="circle-proggress-items col-md-3 col-xs-6">
                                            <span class="progress-content"><B>Draw</B></span>
                                            <div id="demo-pie-3" class="pie-title-center" data-percent="{{(100*$perf->draws)/$perf->matches}}">
                                                <span class="pie-value"></span>
                                            </div>
                                        </div>
                                        <div class="circle-proggress-items col-md-3 col-xs-6">
                                            <span class="progress-content"><B>Clean</B></span>
                                            <div id="demo-pie-3" class="pie-title-center" data-percent="{{(100*$perf->clean)/$perf->matches}}">
                                                <span class="pie-value"></span>
                                            </div>
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
        </div>
    </div>


    <div class="club-play-histry">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs col-md-offset-2" role="tablist">
                        <li class="col-xs-12 col-sm-4 col-md-3" role="presentation" class="active">
                            <a href="#players" aria-controls="players" role="tab" data-toggle="tab">
                                <i class="fa fa-star-o" aria-hidden="true"></i> Stats
                            </a>
                        </li>
                        <li class="col-xs-12 col-sm-4 col-md-3" role="presentation">
                            <a href="#stats" aria-controls="stats" role="tab" data-toggle="tab">
                                <i class="fa fa-male" aria-hidden="true"></i> Players
                            </a>
                        </li>
                        <li class="col-xs-12 col-sm-4 col-md-3" role="presentation">
                            <a href="#matches" aria-controls="matches" role="tab" data-toggle="tab">
                                <i class="fa fa-futbol-o" aria-hidden="true"></i> Matches
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="players">
                            <div class="point-table-area">
                                <div class="point-title-area">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th width="13%" scope="row">
                                                <span>League</span>
                                            </th>
                                            <th width="5%" class="text-center">Played</th>
                                            <th width="5%" class="text-center">Win</th>
                                            <th width="5%" class="text-center">Draw</th>
                                            <th width="6%" class="text-center">Lose </th>
                                            <th width="6%" class="text-center">For</th>
                                            <th width="6%" class="text-center">Against</th>
                                            <th width="6%" class="text-center">diff.</th>
                                            <th width="6%" class="text-center">Clean</th>
                                            <th width="6%" class="text-center">Saves</th>
                                            <th width="6%" class="text-center">Assists</th>
                                            <th width="6%" class="text-center">Yellow </th>
                                            <th width="6%" class="text-center">Red</th>
                                            <th width="6%" class="text-center">Shots</th>
                                            <th width="6%" class="text-center">Offsides</th>
                                            <th width="6%" class="text-center">Points</th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="point-itmes">
                                    <table class="table table-striped-inverse point-table">
                                        <tbody>
                                        @if($clubstats != 'Null')
                                            @foreach($clubstats as $clubstat)
                                            <tr>
                                                <th width="13%" data-th="League" scope="row">
                                                    <span>{{$clubstat->League}}</span>
                                                </th>
                                                <td width="5%" data-th="Played" class="text-center">{{$clubstat->matches}}</td>
                                                <td width="5%" data-th="Won" class="text-center">{{$clubstat->win}}</td>
                                                <td width="5%" data-th="Draw" class="text-center">{{$clubstat->draw}}</td>
                                                <td width="6%" data-th="Lost" class="text-center">{{$clubstat->lose}}</td>
                                                <td width="6%" data-th="For" class="text-center">{{$clubstat->goalsFor}}</td>
                                                <td width="6%" data-th="Against" class="text-center">{{$clubstat->goalsAgainst}}</td>
                                                <td width="6%" data-th="diff." class="text-center">{{$clubstat->goalsFor - $clubstat->goalsAgainst}}</td>
                                                <td width="6%" data-th="Clean" class="text-center">{{$clubstat->cleanSheet}}</td>
                                                <td width="6%" data-th="Saves" class="text-center">{{$clubstat->saves}}</td>
                                                <td width="6%" data-th="Assists" class="text-center">{{$clubstat->assists}}</td>
                                                <td width="6%" data-th="Yellow" class="text-center">{{$clubstat->yellowCards}}</td>
                                                <td width="6%" data-th="Red" class="text-center">{{$clubstat->redCards}}</td>
                                                <td width="6%" data-th="Shots" class="text-center">{{$clubstat->shots}}</td>
                                                <td width="6%" data-th="Offsides" class="text-center">{{$clubstat->offsides}}</td>
                                                <td width="6%" data-th="Points" class="text-center">{{($clubstat->win * 3)+($clubstat->draw * 1)}}</td>
                                            </tr>
                                            @endforeach
                                        @else
                                            <h1>No Stats!</h1>
                                        @endif
                                        </tbody>
                                    </table>
                                    <div class="point-table-button text-center">
                                        <a href="#">View More Leagues <i class="fa fa-plus-circle"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div role="tabpanel" class="tab-pane" id="stats">
                            @if($players != 'Null')
                              @foreach($players as $player)
                                <div class="player-total-details">
                                    <div class="player-name-img player-inner">
                                        <div class="profile-image">
                                            <a href="{{url('playerstats/'.$player->PlayerId)}}">
                                                <img src="{{ asset('images/players/'.$player->club.'.png') }}" width="70" height="70">
                                            </a>
                                        </div>
                                        <div class="profile-caption profile-caption1">
                                            <a href="{{url('playerstats/'.$player->PlayerId)}}"><p>{{$player->PlayerName}}</p></a>
                                            <h3>Age: {{$player->dob}}</h3>
                                        </div>
                                    </div>
                                    <div class="player-country player-inner">
                                        <div class="profile-caption profile-caption2">
                                            <h1><span class="label label-default">
                                                <img class="flag-icon" src="{{ asset('icons/flags/4x3/'.$player->nationCode.'.svg') }}">
                                            {{$player->Nationality}}</span></h1>
                                        </div>
                                    </div>
                                    <div class="player-position player-inner">
                                        <h3>#{{$player->number or ' '}} {{$player->position or ' '}}
                                            <i class="fa fa-street-view" aria-hidden="true"></i>
                                        </h3>
                                    </div>
                                </div>
                              @endforeach
                            @else
                                <h1>No Players!</h1>
                            @endif
                        </div>

                        <div role="tabpanel" class="tab-pane" id="matches">
                            <table class="table point-items-more table-striped-inverse">
                                <tbody>
                                @if($matches != 'Null')
                                    @foreach($matches as $match)
                                    <tr>
                                        <td>
                                            <a href="{{url('matchstats/'.$match->MatchId)}}" class="">
                                                <p class="pt-heading">{{$match->MatchDate}} - {{$match->type}}</p>
                                                <p>{{$match->Stadium or ' '}}</p>
                                            </a>
                                        </td>
                                        <td class="text-right">
                                            <a href="{{url('matchstats/'.$match->MatchId)}}" class="">
                                                <span>{{$match->Team1}}</span>
                                                <img src="{{ asset('images/clubs/'.$match->Team1.'.png') }}" width="50" height="50"/>
                                                <span>{{$match->Score or $match->MatchTime}}</span>
                                                <img src="{{ asset('images/clubs/'.$match->Team2.'.png') }}" width="50" height="50"/>
                                                <span>{{$match->Team2}}</span>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <h1>There is no Matches Added!</h1>
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
