
@extends('layout.master')

@section('title','LFG - Matches')

@section('body')

        <!-- START PAGE TITILE SECTION -->
<div class="player-profile-section page-title-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="section-title profile-title">
                    <h1>Season {{$seasons->League}}</h1>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="pagination-area">
                    <ul>
                        <li><a href="/">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <li class="active"><a href="">Matches</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END OF /. PAGE TITLE SECTION -->


<div class="fixture-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="world-cup">
                    <h1>Season {{$seasons->League}}</h1>
                </div>
            </div>
        </div>
        <div class="row inner-custom-row">
            <div class="col-md-12">
                @if(!empty($matches))
                    @foreach($matches as $match)
                <div class="row">
                    <div class="white-match">
                        <a href="/matchstats/{{$match->MatchId}}">
                            <div class="col-md-4">
                                <div class="match-left">
                                    <div class="fixture-team-img">
                                        <img src="images/clubs/{{$match->Team1}}.png" width="80" height="77" alt="">
                                    </div>
                                    <div class="fixture-team-name fixture-team-left">
                                        <h1>{{$match->Team1}}</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fixture-team-date">
                                    <span class="text-yellow matchicon">
                                        @if($match->type == 'Cup' or $match->type == 'Super')
                                            <i class="fa fa-trophy" aria-hidden="true"></i>
                                        @elseif($match->type == 'League' or $match->type == 'Friendly')
                                            <i class="fa fa-futbol-o" aria-hidden="true"></i>
                                        @elseif($match->type == 'International' or $match->type == 'Asia')
                                            <i class="fa fa-globe" aria-hidden="true"></i>
                                        @endif
                                    </span>
                                    <h1>{{$match->Stadium}} - Round: {{$match->Round}}</h1>
                                    <h1>{{$match->MatchDate}}</h1>
                                    <h1><span class="text-yellow">{{($match->Score) ? $match->Score : $match->MatchTime}}</span></h1>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="match-right">
                                    <div class="fixture-team-name fixture-team-right text-right">
                                        <h1>{{$match->Team2}}</h1>
                                    </div>
                                    <div class="fixture-team-img">
                                        <a href="#"><img src="images/clubs/{{$match->Team2}}.png" width="80" height="77" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
                @else
                    <h1>No Matches!</h1>
                @endif
            </div>
        </div>

    </div>
</div>

<div class="prev-and-next-sec">
    <div class="container">
        <div class="row">

            <div class="col-xs-6">
                @if($matches->currentPage() != 1)
                <div class="prev-and-next-btn-section prev-and-next-btn-section1">
                    <div class="prev-and-next-btn">
                        <a href="{{$matches->previousPageUrl()}}"><i class="fa fa-angle-left" aria-hidden="true"></i>Prev</a>
                    </div>
                </div>
                @endif
            </div>

            <div class="col-xs-6">
                @if($matches->currentPage() != $matches->lastPage())
                <div class="prev-and-next-btn-section">
                    <div class="prev-and-next-btn">
                        <a href="{{$matches->nextPageUrl()}}">Next<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                @endif
            </div>

        </div>
    </div>
</div>

@endsection