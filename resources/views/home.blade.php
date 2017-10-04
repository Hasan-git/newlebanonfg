
@extends('layout.master')

@section('title','LFG - Home Page')

@section('body')
  <!-- START SLIDER SECTION -->
  <div class="slider-section slider-v">
      <div class="container">
          <div class="row">
              <div class="col-md-8">
                  <div class="slider-content">
                      <h1>Lebanese League</h1>
                      <p>The 2017 Lebanese League, commonly referred to as  or simply , was the Championship</p>
                  </div>
              </div><!-- end of /. col -->
          </div><!-- end of /. row -->
      </div><!-- end of /. container -->


      <div class="container">
          <div class="row">

              @if($homematch != 'Null')
              <div class="col-md-12">
                  <div class="sport-time">
                      <h2>VS</h2>
                      <p>{{$homematch->MatchDate}} - {{$homematch->MatchTime}}</p>
                  </div>
              </div>
              <div class="col-md-12">
                  <div class="match-time-section">
                      <div class="row">
                          <div class="col-md-3 col-sm-12">
                              <div class="team-logo right">
                                  <a href="/clubstats/{{$team1->TeamId}}">
                                      <div class="img-circle">
                                          <div class="logo-area">
                                              <div class="logo-box-home">
                                                  <img src="images/clubs/{{$homematch->Team1}}.png" width="65" height="63" style="border: 0" alt="">
                                              </div>
                                          </div>
                                      </div>
                                      {{--<div class="content">--}}
                                          {{--<p>{{$homematch->Team1}}</p>--}}
                                      {{--</div>--}}
                                  </a>
                              </div>
                          </div>
                          <div class="col-md-6 col-sm-12">
                              <div id="todayGame" class="home2-timer">
                                  <ul class="countdown center">
                                      <li class="couner-box">
                                          <span class="days" id="countd"></span>
                                          <p class="displayformat">Days</p>
                                          <p class="time-divder">:</p>
                                      </li>
                                      <li class="couner-box">
                                          <span class="hours" id="counth"></span>
                                          <p class="displayformat">Hours</p>
                                          <p class="time-divder">:</p>
                                      </li>
                                      <li class="couner-box">
                                          <span class="minutes" id="countm"></span>
                                          <p class="displayformat">Minutes</p>
                                          <p class="time-divder">:</p>
                                      </li>
                                      <li class="couner-box">
                                          <span class="seconds" id="counts"></span>
                                          <p class="displayformat">Seconds</p>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <script>
                              var end = new Date('{{$homematch->MatchDate}} {{$homematch->MatchTime}}');

                              var _second = 1000;
                              var _minute = _second * 60;
                              var _hour = _minute * 60;
                              var _day = _hour * 24;
                              var timer;

                              function showRemaining() {
                                  var now = new Date();
                                  var distance = end - now;
                                  if (distance < 0) {

                                      clearInterval(timer);
                                      document.getElementById('countd').innerHTML = '00';
                                      document.getElementById('counth').innerHTML = '00';
                                      document.getElementById('countm').innerHTML = '00';
                                      document.getElementById('counts').innerHTML = '00';
                                      return;
                                  }
                                  var days = Math.floor(distance / _day);
                                  var hours = Math.floor((distance % _day) / _hour);
                                  var minutes = Math.floor((distance % _hour) / _minute);
                                  var seconds = Math.floor((distance % _minute) / _second);

                                  document.getElementById('countd').innerHTML = days;
                                  document.getElementById('counth').innerHTML = hours;
                                  document.getElementById('countm').innerHTML = minutes;
                                  document.getElementById('counts').innerHTML = seconds;
                              }

                              timer = setInterval(showRemaining, 1000);
                          </script>
                          <div class="col-md-3 col-sm-12">
                              <div class="team-logo left">
                                  <a href="/clubstats/{{$team2->TeamId}}">
                                      <div class="img-circle">
                                          <div class="logo-area">
                                              <div class="logo-box-home">
                                                   <img src="images/clubs/{{$homematch->Team2}}.png" width="65" height="63" style="border: 0" alt="">
                                              </div>
                                          </div>
                                      </div>
                                      {{--<div class="content">--}}
                                          {{--<p>{{$homematch->Team2}}</p>--}}
                                      {{--</div>--}}
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              @endif

          </div><!-- END OF Row -->
      </div><!-- END OF Container -->


  </div><!-- END OF /. SLIDER SECTION -->

  <!-- start twitter section -->
  <div class="twitter-tweit-section tiwtter-section-2">
      <div class="container-fluid footer-top-bg left-arrow-bg left-arrow-bg2">
          <div class="row">
              <div class="col-md-3 bg-parent">
                  <Div class="right-bg-g"></Div>
              </div>
          </div>
      </div><!-- arrow shape -->
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <div class="titter-title">
                      <h3><i class="fa fa-twitter"></i> Tweets</h3>
                      <span>Follow Us: @Lebanonfg</span>
                  </div>
              </div><!-- twiiter title -->
              <div class="col-md-7">
                  <div class="twitter-slide">
                      <div class="owl-carousel" id="twitter-slide">
                          <div class="item">
                              <p>The 2017 Lebanese League, commonly referred to as  </p>
                          </div>
                          <div class="item">
                              <p>The 2017 Lebanese League, commonly referred to asan</p>
                          </div>
                          <div class="item">
                              <p>Thhe 2017 Lebanese League, commonly referred to asan</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-1">
                  <div class="twitter-navigation">
                      <button class="twitter-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                      <button class="twitter-perv"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                  </div>
              </div><!-- end of /. col -->
          </div><!-- end of /. row -->
      </div><!-- end of /. container -->
  </div><!-- end of /. twitter section -->

  @if($news != 'Null')
  <div class="update-news-section">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="owl-carousel update-news row" id="update-news">

                      @foreach($news as $new)
                      <div class="item">
                          <div class="blog-items">
                              <a href="/single/{{$new->ArticleId}}">
                                  <span>{{$new->type}}</span>
                                  <img src="images/articles/thumb/{{$new->imagename}}" alt="" />
                                  <div class="blog-content-title">
                                      <h3>{{str_limit($new->Title, 50)}}</h3>
                                      <span>{{$new->Author}}  <i class="fa fa-clock-o"></i>  {{$new->Date}}  </span>
                                  </div>
                              </a>
                          </div>
                      </div>
                      @endforeach

                  </div>
                  <div class="update-navigation">
                      <button class="update-news-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                      <button class="update-news-perv"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @endif

  <div class="popular-news-section">
    <div class="container">
      <div class="col-md-12">
        <div class="row">

            @if($matches != 'Null')
          <div class="col-md-4">
              <div class="widget">
                  <div class="widget-title">
                      <h3>Next Match</h3>
                      <div class="custom-navigation arrow-style">
                          <button class="next-match-perv"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                          <button class="next-match-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                      </div>
                  </div>

                  <div class="widget-container">
                      <div class="owl-carousel next-match" id="next-match">


                          @foreach($matches as $match)
                          <div class="item">
                              <div class="col-md-12">
                                  <div class="timer-area">
                                      <div class="sport-time widget-vs">
                                          <h2>VS</h2>
                                          <p>{{$match->MatchDate}}<br/>{{$match->MatchTime}}</p>
                                      </div>
                                      <div class="sport-time">
                                          <p>Round: {{$match->Round}} - {{$match->Stadium}}</p>
                                      </div>
                                  </div>
                              </div>
                              <div class="team-logo-area">
                                  <div class="col-xs-6">
                                      <div class="team-logo left">
                                          <a>
                                              <div class="img-circle">
                                                  <div class="logo-area">
                                                      <div class="logo-box">
                                                          <img src="images/clubs/{{$match->Team1}}.png" width="65px" height="63px" style="border: 0" alt="">
                                                      </div>
                                                  </div>
                                              </div>
                                              {{--<div class="content">--}}
                                                 {{--<p>{{$match->Team1}}</p>--}}
                                              {{--</div>--}}
                                          </a>
                                      </div>
                                  </div>
                                  <div class="col-xs-6">
                                      <div class="team-logo right">
                                          <a>
                                              <div class="img-circle">
                                                  <div class="logo-area">
                                                      <div class="logo-box">
                                                           <img src="images/clubs/{{$match->Team2}}.png" width="65px" height="63px" style="border: 0" alt="">
                                                      </div>
                                                  </div>
                                              </div>
                                              {{--<div class="content">--}}
                                                  {{--<p>{{$match->Team2}}</p>--}}
                                              {{--</div>--}}
                                          </a>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          @endforeach


                      </div>
                  </div>
              </div><!-- end of /. widget -->
            </div>
            @endif

            @if($results != 'Null')
              <div class="col-md-4">
                  <div class="widget">
                      <div class="widget-title">
                          <h3>Recent Result</h3>
                          <div class="recent-navigation arrow-style">
                              <button class="recent-re-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
  </button>
                              <button class="recent-re-next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
  </button>
                          </div>
                      </div>
                      <div class="widget-container">
                          <div class="owl-carousel" id="recent-result">

                              <?php $i=0 ?>
                              @foreach($results as $result)
                                  <?php $i++ ?>
                                  @if($i==1 || $i==4)
                                  <div class="item">
                                  @endif

                                      <div class="recent-items">
                                          <a href="matchstats/{{$result->MatchId}}">
                                              <h4>{{$result->MatchDate}}</h4>
                                              <div class="result-coutry-area">
                                                  <div class="result-item">
{{--                                                      <p>{{$result->Team1}}</p>--}}
                                                      <img src="images/clubs/{{$result->Team1}}.png" alt="" />
                                                  </div>
                                                  <div class="result-item">
                                                      <p>{{$result->Score}}</p>
                                                  </div>
                                                  <div class="result-item">
                                                      <img src="images/clubs/{{$result->Team2}}.png" alt="" />
{{--                                                      <p>{{$result->Team2}}</p>--}}
                                                  </div>
                                              </div>
                                          </a>
                                      </div>


                                  @if($i==3 && $results != 'Null')
                                  </div><!-- end of /. item -->
                                  @endif

                              @endforeach
                              @if($i!=3 && $i!=0)
                              </div><!-- end of /. item -->
                              @endif

                          </div>
                      </div>
                  </div><!-- end of /. widget -->
              </div>
              @endif


              @if($ranks != 'Null')
              <div class="col-md-4">
                  <div class="widget">
                      <div class="widget-title">
                          <h3><a href="ranks" style="color: #fff;">League Rank</a></h3>
                          <div class="custom-navigation arrow-style">
                              <button class="club-rank-perv">
                                  <i class="fa fa-chevron-left" aria-hidden="true"></i>
                              </button>
                              <button class="club-rank-next">
                                  <i class="fa fa-chevron-right" aria-hidden="true"></i>
                              </button>
                          </div>
                      </div>
                      <div class="widget-container">
                          <div class="owl-carousel" id="club-rank">

                              <?php $i=0 ?>
                              @foreach($ranks as $rank)
                                  <?php $i++ ?>
                                  @if($i==1 || $i==5 || $i==9)
                                  <div class="item">
                                  @endif

                                      <div class="club-items">
                                          <span>{{$i}}</span>
                                          <div class="club-logo">
                                              <img src="images/clubs/{{$rank->club}}.png" width="40" height="40" alt="">
                                          </div>
                                          <p>{{$rank->club}}</p>
                                          <b>{{$rank->points}}</b>
                                      </div>

                                  @if($i==4 || $i==8)
                                  </div><!-- end of /. item -->
                                  @endif

                              @endforeach
                              @if($i!=4 && $i!=8 && $i!=0)
                              </div><!-- end of /. item -->
                              @endif

                          </div>
                      </div>
                  </div><!-- end of /. widget -->
              </div>
              @endif

          </div><!-- end row -->              
        </div>  
      </div>
    </div>

  <!-- START MAIN CONTANER -->
  <div class="section blog-container-1">     
    <div class="container">
        <div class="row">
          <div class="col-md-8">

            <div class="row">
              <div class="col-md-6">
                    <div class="title-section sm-title">
                        <h2>Top <b>Scorrer</b></h2>
                        <a href="ranks"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div><!-- end of /. col -->
                    <div class="blog-items">
                        <div class="owl-carousel top-player" id="scorrer">

                        @foreach($scores as $score)
                            <div class="item">
                                <a>
                                <span>{{$score->goals}} Goals</span>
                                <img src="images/player.jpg" alt="" />
                                <div class="blog-content-title">
                                    <span>{{$score->player}}</span>
                                    {{--<span>{{$score->club}}</span>--}}
                                </div>
                                </a>
                            </div>
                        @endforeach

                        </div>
                        <div class="player-navigation arrow-style">
                            <button class="scorrer-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                            <button class="scorrer-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>

              <div class="col-md-6">
                    <div class="title-section sm-title">
                        <h2>Top <b>Assister</b></h2>
                        <a href="ranks"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div><!-- end of /. col -->
                    <div class="blog-items">
                        <div class="owl-carousel top-player" id="assist">

                            @foreach($assists as $assist)
                            <div class="item">
                                <a>
                                <span>{{$assist->assists}} Assists</span>
                                <img src="images/player.jpg" alt="" />
                                <div class="blog-content-title">
                                    <span>{{$assist->player}}</span>
                                    {{--<span> Halfback </span>--}}
                                </div>
                                </a>
                            </div>
                            @endforeach

                        </div>
                        <div class="player-navigation arrow-style">
                            <button class="assist-prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
                            <button class="assist-next"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>

            </div><!-- row -->  

            <div class="row">
                <div class="col-md-6">
                    <div class="title-section sm-title">
                        <h2>Top <b>Player</b></h2>
                        <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div><!-- end of /. col -->
                    <div class="blog-items">
                        <div class="owl-carousel top-player" id="player">

                            <div class="item">
                                <a href="#">
                                    <span>2017</span>
                                    <img src="images/player.jpg" alt="" />
                                    <div class="blog-content-title">
                                        <h3>Ali Ziendine</h3>
                                        <span><i class="fa fa-male"></i> Halfback </span>
                                    </div>
                                </a>
                            </div>

                        </div>
                        {{--<div class="player-navigation arrow-style">--}}
                            {{--<button class="player-next"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>--}}
                            {{--<button class="player-prev"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>--}}
                        {{--</div>--}}
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="title-section sm-title">
                        <h2>Our <b>Polls</b></h2>
                        <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="blog-items our-polls">
                        <div class="poll-item">
                            <h3>{{$poll->question}}</h3>
                                <ul>
                                    <li>
                                        <input type="radio" value="a" id="a-option" name="selector">
                                        <label for="a-option">{{$poll->a}}</label>
                                        <div class="check"></div>
                                    </li>
                                    <li>
                                        <input type="radio" value="b" id="b-option" name="selector">
                                        <label for="b-option">{{$poll->b}}</label>
                                        <div class="check"><div class="inside"></div></div>
                                    </li>
                                    <li>
                                        <input type="radio" value="c" id="c-option" name="selector">
                                        <label for="c-option">{{$poll->c}}</label>
                                        <div class="check"><div class="inside"></div></div>
                                    </li>
                                    <li>
                                        <input type="radio" value="d" id="d-option" name="selector">
                                        <label for="d-option">{{$poll->d}}</label>
                                        <div class="check"><div class="inside"></div></div>
                                    </li>
                                </ul>
                            <a href="#">Submit Answer</a>
                        </div>
                    </div>
                </div><!-- end col 6-->
            </div>   <!-- end row --> 
          </div>  <!-- end col 8-->  


            <div class="col-md-4">
                <div class="widget">
                    <div class="widget-title">
                        <h3>Today on Lebanon FG</h3>
                    </div>
                    <div class="widget-container">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <ul class="sport-item">
                                        <li>
                                            <a href="#">
                                                <img src="images/next-game.jpg" class="img-responsive" width="310" height="220" alt="">
                                                <h3>Best Player in final three: Ali Ziendine</h3>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- end of slider /. item -->
                                <div class="item">
                                    <ul class="sport-item">
                                        <li>
                                            <a href="#">
                                                <img src="images/next-game.jpg" class="img-responsive" width="310" height="220" alt="">
                                                <h3>Best Player in final three: Ali Ziendine</h3>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- end of slider /. item -->
                                <div class="item">
                                    <ul class="sport-item">
                                        <li>
                                            <a href="#">
                                                <img src="images/next-game.jpg" class="img-responsive" width="310" height="220" alt="">
                                                <h3>Best Player in final three: Ali Ziendine</h3>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- end of slider /. item -->
                                <div class="item">
                                    <ul class="sport-item">
                                        <li>
                                            <a href="#">
                                                <img src="images/next-game.jpg" class="img-responsive" width="310" height="220" alt="">
                                                <h3>Best Player in final three: Ali Ziendine</h3>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- end of slider /. item -->
                                <div class="item">
                                    <ul class="sport-item">
                                        <li>
                                            <a href="#">
                                                <img src="images/next-game.jpg" class="img-responsive" width="310" height="220" alt="">
                                                <h3>Best Player in final three: Ali Ziendine</h3>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- end of slider /. item -->

                            </div>
                            <ol class="sport-item slider-game-time">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                                    <a href="#">
                                        <span>16:48</span>
                                        <p>Best Player in final three: Ali Ziendine</p>
                                    </a>
                                </li>
                                <li data-target="#carousel-example-generic" data-slide-to="1">
                                    <a href="#">
                                        <span>15:24</span>
                                        <p>Sweden and  in last four</p>
                                    </a>
                                </li>
                                <li data-target="#carousel-example-generic" data-slide-to="2">
                                    <a href="#">
                                        <span>12:28</span>
                                        <p>Men's Olympic football: day three</p>
                                    </a>
                                </li>
                                <li data-target="#carousel-example-generic" data-slide-to="3">
                                    <a href="#">
                                        <span>11:42</span>
                                        <p>Carvajal wins Super Cup for </p>
                                    </a>
                                </li>
                                 <li data-target="#carousel-example-generic" data-slide-to="4">
                                    <a href="#">
                                        <span>11:42</span>
                                        <p>Praise for City signing John Stones</p>
                                    </a>
                                </li>
                                <li data-target="#carousel-example-generic" data-slide-to="5">
                                    <a href="#">
                                        <span>11:42</span>
                                        <p>Praise for City signing John Stones</p>
                                    </a>
                                </li>
                                <li data-target="#carousel-example-generic" data-slide-to="6">
                                    <a href="#">
                                        <span>11:42</span>
                                        <p>Praise for City signing John Stones</p>
                                    </a>
                                </li>

                            </ol>
                        </div>
                    </div>
                </div><!-- end of /. widget -->
            </div><!-- end sidebar -->

        </div>
    </div>        
  </div>

  <!-- start video section -->
  <div class="section video-section">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="title-section">
                      <h2>HOT <b>Videos</b></h2>
                      <div class="recent-navigation arrow-style">
                          <button class="video-perv"><i class="fa fa-chevron-left" aria-hidden="true"></i>
</button>
                          <button class="video-next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
</button>
                      </div>
                  </div>
              </div><!-- end of /. col -->
          </div><!-- end of /. row -->
          <div class="row">
              <div class="col-md-12">
                  <div class="row owl-carousel gallery" id="hot-video">
                      <div class="item">
                          <div class="video-items">
                              <a href="http://www.youtube.com/watch?v=qqXi8WmQ_WM" data-gal="prettyPhoto[gallery2]">
                                  <img src="images/video/1.jpg" class="img-responsive" width="370" height="370" alt="">
                                  <h3><i class="fa fa-play" aria-hidden="true"></i>  Preview: Tuesday's play-offs</h3>
                              </a>
                          </div>
                      </div><!-- end of /. item -->
                      <div class="item">
                          <div class="video-items">
                              <a href="http://www.youtube.com/watch?v=qqXi8WmQ_WM" data-gal="prettyPhoto[gallery2]">
                                  <img src="images/video/2.jpg" class="img-responsive" width="370" height="370" alt="">
                                  <h3><i class="fa fa-play" aria-hidden="true"></i>  Preview: Tuesday's play-offs</h3>
                              </a>
                          </div>
                      </div><!-- end of /. item -->
                      <div class="item">
                          <div class="video-items">
                              <a href="http://www.youtube.com/watch?v=qqXi8WmQ_WM" data-gal="prettyPhoto[gallery2]">
                                  <img src="images/video/3.jpg" class="img-responsive" width="370" height="370" alt="">
                                  <h3><i class="fa fa-play" aria-hidden="true"></i>  Preview: Tuesday's play-offs</h3>
                              </a>
                          </div>
                      </div><!-- end of /. item -->
                      <div class="item">
                          <div class="video-items">
                              <a href="http://www.youtube.com/watch?v=qqXi8WmQ_WM" data-gal="prettyPhoto[gallery2]">
                                  <img src="images/video/4.jpg" class="img-responsive" width="370" height="370" alt="">
                                  <h3><i class="fa fa-play" aria-hidden="true"></i>  Preview: Tuesday's play-offs</h3>
                              </a>
                          </div>
                      </div><!-- end of /. item -->
                      <div class="item">
                          <div class="video-items">
                              <a href="http://www.youtube.com/watch?v=qqXi8WmQ_WM" data-gal="prettyPhoto[gallery2]">
                                  <img src="images/video/1.jpg" class="img-responsive" width="370" height="370" alt="">
                                  <h3><i class="fa fa-play" aria-hidden="true"></i>  Preview: Tuesday's play-offs</h3>
                              </a>
                          </div>
                      </div><!-- end of /. item -->
                  </div>
              </div><!-- end of /. col -->
          </div><!-- end of /. row -->
      </div><!-- end of /. container -->
  </div><!-- end of /. video section -->
@endsection
