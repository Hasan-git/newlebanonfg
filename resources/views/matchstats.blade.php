@extends('layout.master')

@section('title','LFG - Match Stats')

@section('body')

    <!-- start of /. match today section -->
    <div class="match-today-section world-cup-match">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="world-cup-match-title gallery">
                        <h1><a href="/pics/{{$match->MatchId}}">
                                <span><i class="fa fa-camera" aria-hidden="true"></i></span>
                            </a>
                            {{$match->type}}
                            <a href="{{$match->videoURL}}" data-gal="prettyPhoto[gallery2]">
                                <span><i class="fa fa-video-camera" aria-hidden="true"></i></span>
                        </a></h1>
                        <p><a>{{$match->MatchDate .' - '. $match->MatchTime}}<br/> {{$match->Stadium}} - Round: {{$match->Round}}</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="match-left">
                        <div class="today-team-img teamsname">
                            <img src="{{ asset('images/clubs/'.$match->Team1.'.png') }}" width="120" height="120" alt="">
                        </div>
                        <div class="today-team-name teamsname">
                            <h1>{{$match->Team1}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="team-vs-team">
                        <h1>{{$team1->goalsFor}}:{{$team2->goalsFor}}</h1>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="match-right">
                        <div class="today-team-name teamsname text-right">
                            <h1>{{$match->Team2}}</h1>
                        </div>
                        <div class="today-team-img teamsname">
                            <img src="{{ asset('images/clubs/'.$match->Team2.'.png') }}" width="120" height="120" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="nex-match">
                        <p>Half time:<span>{{$match->halfTime}}</span></p>
                        <p>Full time:<span>{{$match->Score}}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end of /. match today section -->

    <div class="world-cup-match-stastic-section">
        <div class="container">
            <div class="row">
                <div class="world-cup-match-stastic-inner">
                    <div class="col-md-12">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#match-statistics" aria-controls="match-statistics" role="tab" data-toggle="tab">Match Statistics</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-xs-6 ">
                        <div class="world-match-left">
                            <div class="world-team-img">
                                <img src="{{ asset('images/clubs/'.$match->Team1.'.png') }}" width="65" height="63" alt="">
                            </div>
                            <div class="world-team-name">
                                @if($team1->goalsFor > $team2->goalsFor)
                                    <h1 class="">{{$match->Team1}}</h1>
                                    <p><span class="alert-success">Win</span></p>
                                @elseif($team1->goalsFor < $team2->goalsFor)
                                    <h1 class="statstics-color">{{$match->Team1}}</h1>
                                    <p><span class="alert-danger">Lose</span></p>
                                @else
                                    <h1 class="statstics-color">{{$match->Team1}}</h1>
                                    <p><span class="alert-warning">Draw</span></p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-6">
                        <div class="world-match-right ">
                            <div class="world-team-name text-right">
                                @if($team2->goalsFor > $team1->goalsFor)
                                    <h1 class="">{{$match->Team2}}</h1>
                                    <p><span class="alert-success">Win</span></p>
                                @elseif($team2->goalsFor < $team1->goalsFor)
                                    <h1 class="statstics-color">{{$match->Team2}}</h1>
                                    <p><span class="alert-danger">Lose</span></p>
                                @else
                                    <h1 class="statstics-color">{{$match->Team2}}</h1>
                                    <p><span class="alert-warning">Draw</span></p>
                                @endif
                            </div>
                            <div class="world-team-img world-team-img-right">
                                <img src="{{ asset('images/clubs/'.$match->Team2.'.png') }}" width="65" height="63" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="match-statistics">
                            <div class="result-tab-area">
                                <div class="col-md-12">

                                    <div class="row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                @if($team1->goalsFor > $team2->goalsFor)
                                                    <p>{{$team1->goalsFor}}</p>
                                                @else
                                                    <p class="statstics-color">{{$team1->goalsFor}}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Goals</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                @if($team2->goalsFor > $team1->goalsFor)
                                                    <p>{{$team2->goalsFor}}</p>
                                                @else
                                                    <p class="statstics-color">{{$team2->goalsFor}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row color-row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                @if($team1->assists > $team2->assists)
                                                    <p>{{$team1->assists}}</p>
                                                @else
                                                    <p class="statstics-color">{{$team1->assists}}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Assists</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                @if($team2->assists > $team1->assists)
                                                    <p>{{$team2->assists}}</p>
                                                @else
                                                    <p class="statstics-color">{{$team2->assists}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                @if($team1->shots > $team2->shots)
                                                    <p>{{$team1->shots}}</p>
                                                @else
                                                    <p class="statstics-color">{{$team1->shots}}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Shots</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                @if($team2->shots > $team1->shots)
                                                    <p>{{$team2->shots}}</p>
                                                @else
                                                    <p class="statstics-color">{{$team2->shots}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row color-row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                @if($team1->saves > $team2->saves)
                                                    <p>{{$team1->saves}}</p>
                                                @else
                                                    <p class="statstics-color">{{$team1->saves}}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Saves</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                @if($team2->saves > $team1->saves)
                                                    <p>{{$team2->saves}}</p>
                                                @else
                                                    <p class="statstics-color">{{$team2->saves}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                @if($team1->offsides > $team2->offsides)
                                                    <p>{{$team1->offsides}}</p>
                                                @else
                                                    <p class="statstics-color">{{$team1->offsides}}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Offsides</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                @if($team2->offsides > $team1->offsides)
                                                    <p>{{$team2->offsides}}</p>
                                                @else
                                                    <p class="statstics-color">{{$team2->offsides}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row color-row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                @if($team1->yellowCards > $team2->yellowCards)
                                                    <p>{{$team1->yellowCards}}</p>
                                                @else
                                                    <p class="statstics-color">{{$team1->yellowCards}}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Yellow Cards</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                @if($team2->yellowCards > $team1->yellowCards)
                                                    <p>{{$team2->yellowCards}}</p>
                                                @else
                                                    <p class="statstics-color">{{$team2->yellowCards}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics">
                                                @if($team1->redCards > $team2->redCards)
                                                    <p>{{$team1->redCards}}</p>
                                                @else
                                                    <p class="statstics-color">{{$team1->redCards}}</p>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-8">
                                            <div class="statstics statstics-center text-center">
                                                <p>Red Cards</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-2">
                                            <div class="statstics statstics-right text-right">
                                                @if($team2->redCards > $team1->redCards)
                                                    <p>{{$team2->redCards}}</p>
                                                @else
                                                    <p class="statstics-color">{{$team2->redCards}}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                    {{--<div class="row statstics-attempts-row">--}}
                                        {{--<div class="col-md-12">--}}
                                            {{--<div class="statstics statstics-attempts">--}}
                                                {{--<p>Attempts</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-4 col-xs-2">--}}
                                            {{--<div class="statstics">--}}
                                                {{--<p>16</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 col-xs-8">--}}
                                            {{--<div class="statstics statstics-center text-center">--}}
                                                {{--<p>Total</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 col-xs-2">--}}
                                            {{--<div class="statstics statstics-right text-right">--}}
                                                {{--<p class="statstics-color">7</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row color-row">--}}
                                        {{--<div class="col-md-4 col-xs-2">--}}
                                            {{--<div class="statstics">--}}
                                                {{--<p>9</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 col-xs-8">--}}
                                            {{--<div class="statstics statstics-center text-center">--}}
                                                {{--<p>Open Play</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 col-xs-2">--}}
                                            {{--<div class="statstics statstics-right text-right">--}}
                                                {{--<p class="statstics-color">3</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-4 col-xs-2">--}}
                                            {{--<div class="statstics">--}}
                                                {{--<p>6</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 col-xs-8">--}}
                                            {{--<div class="statstics statstics-center text-center">--}}
                                                {{--<p>Set Piece</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 col-xs-2">--}}
                                            {{--<div class="statstics statstics-right text-right">--}}
                                                {{--<p class="statstics-color">4</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row color-row">--}}
                                        {{--<div class="col-md-4 col-xs-2">--}}
                                            {{--<div class="statstics">--}}
                                                {{--<p class="statstics-color">0</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 col-xs-8">--}}
                                            {{--<div class="statstics statstics-center text-center">--}}
                                                {{--<p>Counter Attack</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 col-xs-2">--}}
                                            {{--<div class="statstics statstics-right text-right">--}}
                                                {{--<p class="statstics-color">0</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-4 col-xs-2">--}}
                                            {{--<div class="statstics">--}}
                                                {{--<p>1</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 col-xs-8">--}}
                                            {{--<div class="statstics statstics-center text-center">--}}
                                                {{--<p>Penalty</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 col-xs-2">--}}
                                            {{--<div class="statstics statstics-right text-right">--}}
                                                {{--<p class="statstics-color">0</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="row color-row">--}}
                                        {{--<div class="col-md-4 col-xs-2">--}}
                                            {{--<div class="statstics">--}}
                                                {{--<p class="statstics-color">0</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 col-xs-8">--}}
                                            {{--<div class="statstics statstics-center text-center">--}}
                                                {{--<p>Own Goal</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-4 col-xs-2">--}}
                                            {{--<div class="statstics statstics-right text-right">--}}
                                                {{--<p class="statstics-color">0</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}


                                    <div class="row statstics-total-row statstics-total-row-last">
                                        <div class="col-md-12">
                                            <div class="statstics statstics-total">
                                                <p>TOTAL</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-padding-zero">
                                        <div class="col-md-12">
                                            <div class="player-states player-result-states">
                                                <div class="main-progressbar main-progressbar-result skillst1">
                                                    <div class="skillbar-items">
                                                        <div class="skillbar progress result-progressbar" data-percent="{{($team1->shots * 100) / ($team1->shots + $team2->shots)}}%">
                                                            <div class="count-bar right progress-bar progress-bar-striped"></div>
                                                        </div>
                                                        <span class="progress-percent progress-percent-result">{{$team1->shots}}</span>
                                                    </div>
                                                </div>

                                                <div class="sports-number">
                                                    <p>Shots</p>
                                                </div>
                                                <div class="main-progressbar main-progressbar-result skillst1">
                                                    <span class="progress-percent-left progress-percent-result float-left">{{$team2->shots}}</span>
                                                    <div class="progress result-progressbar">
                                                        <div class="skillbar progress result-progressbar" data-percent="{{($team2->shots * 100) / ($team1->shots + $team2->shots)}}%">
                                                            <div class="count-bar progress-bar progress-bar-striped"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-padding-zero">
                                        <div class="col-md-12">
                                            <div class="player-states player-result-states">
                                                <div class="main-progressbar main-progressbar-result skillst1">
                                                    <div class="skillbar-items">
                                                        <div class="skillbar progress result-progressbar" data-percent="{{($team1->assists * 100) / ($team1->assists + $team2->assists)}}%">
                                                            <div class="count-bar right progress-bar progress-bar-striped"></div>
                                                        </div>
                                                        <span class="progress-percent progress-percent-result">{{$team1->assists}}</span>
                                                    </div>
                                                </div>

                                                <div class="sports-number">
                                                    <p>Assists</p>
                                                </div>
                                                <div class="main-progressbar main-progressbar-result skillst1">
                                                    <span class="progress-percent-left progress-percent-result float-left">{{$team2->assists}}</span>
                                                    <div class="progress result-progressbar">
                                                        <div class="skillbar progress result-progressbar" data-percent="{{($team2->assists * 100) / ($team1->assists + $team2->assists)}}%">
                                                            <div class="count-bar progress-bar progress-bar-striped"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-padding-zero">
                                        <div class="col-md-12">
                                            <div class="player-states player-result-states">
                                                <div class="main-progressbar main-progressbar-result skillst1">
                                                    <div class="skillbar-items">
                                                        <div class="skillbar progress result-progressbar" data-percent="{{($team1->saves * 100) / ($team1->saves + $team2->saves)}}%">
                                                            <div class="count-bar right progress-bar progress-bar-striped"></div>
                                                        </div>
                                                        <span class="progress-percent progress-percent-result">{{$team1->saves}}</span>
                                                    </div>
                                                </div>

                                                <div class="sports-number">
                                                    <p>Saves</p>
                                                </div>
                                                <div class="main-progressbar main-progressbar-result skillst1">
                                                    <span class="progress-percent-left progress-percent-result float-left">{{$team2->saves}}</span>
                                                    <div class="progress result-progressbar">
                                                        <div class="skillbar progress result-progressbar" data-percent="{{($team2->saves * 100) / ($team1->saves + $team2->saves)}}%">
                                                            <div class="count-bar progress-bar progress-bar-striped"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row row-padding-zero">
                                        <div class="col-md-12">
                                            <div class="player-states player-result-states">
                                                <div class="main-progressbar main-progressbar-result skillst1">
                                                    <div class="skillbar-items">
                                                        <div class="skillbar progress result-progressbar" data-percent="{{($team1->offsides * 100) / ($team1->offsides + $team2->offsides)}}%">
                                                            <div class="count-bar right progress-bar progress-bar-striped"></div>
                                                        </div>
                                                        <span class="progress-percent progress-percent-result">{{$team1->offsides}}</span>
                                                    </div>
                                                </div>

                                                <div class="sports-number">
                                                    <p>Offsides</p>
                                                </div>
                                                <div class="main-progressbar main-progressbar-result skillst1">
                                                    <span class="progress-percent-left progress-percent-result float-left">{{$team2->offsides}}</span>
                                                    <div class="progress result-progressbar">
                                                        <div class="skillbar progress result-progressbar" data-percent="{{($team2->offsides * 100) / ($team1->offsides + $team2->offsides)}}%">
                                                            <div class="count-bar progress-bar progress-bar-striped"></div>
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
                </div>
            </div>
        </div>
    </div>

@endsection