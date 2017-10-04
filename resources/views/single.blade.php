@extends('layout.master')

@section('title','LFG - News')

@section('body')

    <!-- START PAGE TITILE SECTION -->
    <div class="player-profile-section page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-title profile-title">
                        <h1>Single News</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="/">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="/news">News<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="">Single</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. PAGE TITLE SECTION -->

    <div class="blog-container-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-container">
                        <!-- START BLOG ITEMS -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="blog-single-thumb">
                                    <img src="{{ asset('images/articles/'.$article->imagename) }}" alt="" class="img-responsive">

                                </div>
                                <div class="blog-single-content-title">
                                    <h3>{{$article->Title}}</h3>
                                    <span>{{$article->Author}} <i class="fa fa-clock-o"></i>{{$article->Date}} - {{$article->type}}</span>
                                    <ul class="blog-share">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                                <div class="blog-single-content">
                                    <p>
                                        {{$article->Text}}
                                    </p>
                                    <img src="{{ asset('images/articles/'.$article->imagename) }}" alt="" class="img-responsive">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="sidebar">

                        <div class="widget">
                            <div class="sidebar-ad">
                                <a href="#">
                                    <img src="{{ asset('images/ads/ad.jpg') }}" class="img-responsive" width="370" height="200" alt="">
                                </a>
                            </div>
                            <div class="sidebar-ad">
                                <a href="#">
                                    <img src="{{ asset('images/ads/ad.jpg') }}" class="img-responsive" width="370" height="200" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="widget">
                            <div class="widget-title">
                                <h3>Latest News</h3>
                            </div>
                            <div class="widget-container">
                                <div class="widget-latest-blog">

                                    @foreach($latests as $latest)
                                    <div class="blog-items-sm latest-blog">
                                        <a href="{{ asset('single/'.$latest->ArticleId) }}">
                                            <div class="thumbnail">
                                                <img src="{{ asset('images/articles/thumb/'.$latest->imagename) }}" class="img-responsive" width="120" height="120" alt="">
                                            </div>
                                            <div class="blog-content latest">
                                                <span>{{$latest->type}}</span>
                                                <h3>{{str_limit($latest->Title, 30)}}</h3>
                                                <p><i class="fa fa-clock-o"></i>{{$latest->Date}}</p>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div><!-- End Widget -->

                    </div>
                </div><!-- End Sidebar -->

            </div>
        </div>
    </div><!-- END OF /. BLOG CONTAINER SECTION -->

@endsection