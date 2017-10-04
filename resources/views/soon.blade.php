@extends('layout.master')

@section('title','LFG - Comming Soon')

@section('body')
    <hr style="margin: 0px; padding: 0px;">
<div class="wrapper">
    <!-- START COMING SOON SECTION -->
    <div class="page-area-section-error comign-soon-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="comign-soon">
                        <h2>Coming Soon</h2>
                        <div id="countdown1">
                            <img src="images/ball.png" class="img-responsive" width="355" height="350" style="border: 0" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <div id="countdowntimer" class="home2-timer">
                        <ul class="countdown center">
                            <li class="couner-box">
                                <span class="days">00</span>
                                <p class="displayformat">Days</p>
                                <p class="time-divder">:</p>
                            </li>
                            <li class="couner-box">
                                <span class="hours">00</span>
                                <p class="displayformat">Hours</p>
                                <p class="time-divder">:</p>
                            </li>
                            <li class="couner-box">
                                <span class="minutes">00</span>
                                <p class="displayformat">Minutes</p>
                                <p class="time-divder">:</p>
                            </li>
                            <li class="couner-box">
                                <span class="seconds">00</span>
                                <p class="displayformat">Seconds</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- END OF /. COMING SOON SECTION -->



@endsection