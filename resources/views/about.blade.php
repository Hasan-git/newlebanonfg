@extends('layout.master')

@section('title','LFG - About')

@section('body')
<hr style="margin: 0px; padding: 0px;">
<!-- START PAGE TITILE SECTION -->
<div class="player-profile-section page-title-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="section-title profile-title">
                    <h1>About LFG</h1>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="pagination-area">
                    <ul>
                        <li><a href="/">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                        <li class="active"><a href="">About</a></li>
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
                        <a href="#"><img class="img-responsive" src="images/player.jpg" width="370" height="370" alt=""></a>
                        <div class="profile-details">
                            <div class="profile-pic profile-details-inner">
                                <a href="#"><img class="img-responsive" src="images/fixture-team2.png" width="64" height="84" alt=""></a>
                            </div>
                            <div class="carryer-match profile-details-inner">
                                <h2>LFG</h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="player-carryer-total-des">
                        <h1 id="profile-title">Lebanon Football Guide</b></h1>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="player-description">
                                    <p>
                                            {{$about->AboutText}}
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix">&ensp;</div>
        </div>
    </div>

@endsection