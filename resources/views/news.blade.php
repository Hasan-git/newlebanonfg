
@extends('layout.master')

@section('title','LFG - News')

@section('body')

    <hr style="margin: 0px; padding: 0px;">
    <!-- START PAGE TITILE SECTION -->
    <div class="player-profile-section page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-title profile-title">
                        <h1>LFG News</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="/">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="">Latest News</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. PAGE TITLE SECTION -->
<!-- start blog container 2 -->
<div class="section blog-container-2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="title-section">
                                <h2>Latest <b>News</b></h2>

                                <div class="tab">
                                    <ul class="filter-menu button-group sort-button-group">
                                        <li class="button tablinks" onclick="openCity(event, 'All')" id="defaultOpen">All</li>
                                        <li class="button tablinks" onclick="openCity(event, 'Lebanese')">Lebanese</li>
                                        <li class="button tablinks" onclick="openCity(event, 'International')">International</li>
                                    </ul>
                                </div>

                            </div>
                         </div>
                    </div>

                    <div class="row work tabcontent" id="All">

                        @foreach($articles as $article)
                        <div class="col-sm-6 work-item">
                            <div class="blog-items-sm">
                                <a href="single/{{$article->ArticleId}}">
                                    <div class="blog-content">
                                        <span style="margin-right: 10px; float: right">{{$article->type}}</span>
                                        <h3 style="margin-right: 10px; float: right; direction: rtl;">{{str_limit($article->Title, 50)}}</h3>
                                        <p style="margin-right: 10px; float: right"> {{$article->Author}} <i class="fa fa-clock-o"></i>{{$article->Date}}</p>
                                    </div>
                                    <div class="thumbnail">
                                        <img src="images/articles/thumb/{{$article->imagename}}" class="img-responsive" width="120" height="120" alt="">
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach

                    </div>

                    <div class="row work tabcontent" id="Lebanese">

                        @foreach($lebanese as $lebanon)
                            <div class="col-md-6 work-item">
                                <div class="blog-items-sm">
                                    <a href="single/{{$lebanon->ArticleId}}">
                                        <div class="blog-content">
                                            <span style="margin-right: 10px; float: right">{{$lebanon->type}}</span>
                                            <h3 style="margin-right: 10px; float: right; direction: rtl;">{{str_limit($lebanon->Title, 50)}}</h3>
                                            <p style="margin-right: 10px; float: right"> {{$lebanon->Author}} <i class="fa fa-clock-o"></i>{{$lebanon->Date}}</p>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="images/articles/thumb/{{$lebanon->imagename}}" class="img-responsive" width="120" height="120" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div class="row work tabcontent" id="International">

                        @foreach($nations as $nation)
                            <div class="col-md-6 work-item">
                                <div class="blog-items-sm">
                                    <a href="single/{{$nation->ArticleId}}">
                                        <div class="blog-content">
                                            <span style="margin-right: 10px; float: right">{{$nation->type}}</span>
                                            <h3 style="margin-right: 10px; float: right; direction: rtl;">{{str_limit($nation->Title, 50)}}</h3>
                                            <p style="margin-right: 10px; float: right"> {{$nation->Author}} <i class="fa fa-clock-o"></i>{{$nation->Date}}</p>
                                        </div>
                                        <div class="thumbnail">
                                            <img src="images/articles/thumb/{{$nation->imagename}}" class="img-responsive" width="120" height="120" alt="">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div><!-- end of /. col-md-8 -->

            <div class="col-md-4">
                <div class="sidebar">
                    <div class="widget">
                        <div class="widget-title">
                        </div>
                        <div class="social-like-area">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i> <span>   Likes</span> <i class="fa fa-arrow-circle-o-right"></i> </a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i> <span>   Followers</span> <i class="fa fa-arrow-circle-o-right"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget">
                        <div class="sidebar-ad">
                            <a href="#">
                                <img src="images/banner.jpg" class="img-responsive" width="370" height="571" alt="">
                            </a>
                        </div>
                        <div class="sidebar-ad">
                            <a href="#">
                                <img src="images/banner.jpg" class="img-responsive" width="370" height="571" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div><!-- end of /. col -->
        </div><!-- end of /. row -->
    </div><!-- end of /. container -->
</div><!-- end of /. blog container 2 -->

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
@endsection