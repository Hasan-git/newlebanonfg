
@extends('layout.master')

@section('title','LFG - Clubs')

@section('body')
    <hr style="margin: 0px; padding: 0px;">
    <!-- START PAGE TITILE SECTION -->
    <div class="player-profile-section page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-title profile-title">
                        <h1>Lebanese CLubs</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="/">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="">Clubs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="world-cup-match grey">
        <div class="container">
            <div class="row clubs">

                @foreach($clubs as $club)
                    <?php $club->TeamName = trim($club->TeamName); ?>
                    <div class="col-md-2 col-sm-3 col-xs-4 col-xs-offset-1 club" >
                        <div class="team-logo">
                            <a href="{{url('clubstats/'.$club->TeamId)}}" class="clubs">
                                <div class="img-circle">
                                    <div class="logo-area">
                                        <div class="logo-box clubimage">
                                            <img class="clubimage" src="images/clubs/{{$club->TeamName}}.png" alt="{{$club->TeamName}}">
                                        </div>
                                    </div>
                                    <span style="color: #000">{{$club->TeamName}}</span>
                                </div>
                            </a>

                        </div>
                    </div>
                @endforeach

             </div>
        </div>
    </div>

@endsection