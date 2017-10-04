@extends('layout.master')

@section('title','LFG - Gallery')

@section('body')

        <!-- START PAGE TITILE SECTION -->
    <div class="player-profile-section page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-title profile-title">
                        <h1>Match Gallery</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="/">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="/gallery">Gallery<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="">Match Gallery</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. PAGE TITLE SECTION -->

    <div class="single-product-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="singe-product-title">
                        <h3><b>{{$types->Type}}</b></h3>
                        <div class="product-navigation">
                            <a><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                            <a><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">


                    <div class="blog-items">
                        <div class="owl-carousel top-player" id="scorrer">

                            @foreach($pics as $pic)
                            <div class="item">
                                <a>
                                    {{--<span></span>--}}
                                    <img src="{{ asset('images/gallery/'.$pic->ImageName) }}" alt="" />
                                    <div class="blog-content-title">
                                        {{--<h3></h3>--}}
                                        <span> {{$pic->text}} </span>
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
            </div>
            <div class="clearfix">&ensp;</div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="recent-item-title">
                        <h3>Recent <b>Items</b></h3>
                    </div>
                    <div class="recent-productitems row owlcarousle" id="recent-product">

                        @foreach($recents as $recent)
                        <div class="item">
                            <div class="products clearifx">
                                <div class="single-product">
                                    <div class="product-imgs">
                                        <a href="shop-single.html">
                                            <img src="{{ asset('images/gallery/'.$recent->TypeImage) }}" alt="" class="img-responsive product-img" />
                                            <div class="product-hover">
                                                <div class="list-inline text-center product-ratings">
                                                    {{$recent->Type}} <br/>
                                                    {{$recent->Date}} <br/>
                                                    @if($recent->Photographer)
                                                        By: {{$recent->Photographer}}
                                                    @endif
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- END OF PRODUCTS -->
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection