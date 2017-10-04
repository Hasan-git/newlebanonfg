@extends('layout.master')

@section('title','LFG - Gallery')

@section('body')

    <!-- START PAGE TITILE SECTION -->
    <div class="player-profile-section page-title-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="section-title profile-title">
                        <h1>Matches Gallery</h1>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="pagination-area">
                        <ul>
                            <li><a href="/">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li class="active"><a href="">Gallery</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF /. PAGE TITLE SECTION -->

    <!-- START PRODUCTS SECTION -->
    <div class="all-products-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="product-filter">
                                <span><b>Best Matches Shots</b></span>
                            </div><!-- END OF PRODUCT FILTER -->
                        </div>
                    </div>

                    <div class="row">

                        @foreach($gallery as $pic)
                        <div class="col-md-4">
                            <div class="products clearifx">
                                <div class="single-product">
                                    <div class="product-imgs">
                                        <a href="/pics/{{$pic->TypeId}}">
                                            <img src="images/gallery/{{$pic->TypeImage}}" alt="" class="img-responsive product-img" />
                                            <div class="product-hover">
                                                <div class="list-inline text-center product-ratings">
                                                    {{$pic->Type}} <br/>
                                                    {{$pic->Date}} <br/>
                                                    @if($pic->Photographer)
{{--                                                        By: {{$pic->Photographer}}--}}
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

                    <div class="all-products">
                        <nav aria-label="Page navigation" class="navigation">
                            <ul class="pagination">

                                <li>
                                    @if($gallery->currentPage() != 1)
                                    <a href="{{$gallery->previousPageUrl()}}" aria-label="Previous">
                                        <i class="fa fa-chevron-left" aria-hidden="true"></i>
                                        <span aria-hidden="true">Prev</span>
                                    </a>
                                    @endif
                                </li>

                                {{--<li><a href="#">1</a></li>--}}
                                {{--<li class="active"><a href="#">2</a></li>--}}
                                {{--<li><a href="#">3</a></li>--}}
                                {{--<li><a href="#">4</a></li>--}}
                                {{--<li><a href="#">5</a></li>--}}

                                <li>
                                    @if($gallery->currentPage() != $gallery->lastPage())
                                    <a href="{{$gallery->nextPageUrl()}}" aria-label="Next">
                                        <span aria-hidden="true">Next</span>
                                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                                    </a>
                                    @endif
                                </li>

                            </ul>
                        </nav><!-- END OF PRODUCT NAVIGATION -->

                    </div><!-- END OF PRODUCTS SECTION -->

                </div><!-- END OF COL -->

            </div>
        </div>
    </div><!-- END OF PRODUCTS SECTION -->

@endsection