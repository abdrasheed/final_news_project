@extends('frontsite.layouts.master')

<!-- TITLE -->
@section('page-title')
    {{$news->title}}
@endsection

<!-- CSS CODE -->
@section('css_code')
    <!-- add css here -->
@endsection

<!-- JS CODE -->
@section('js_code')
    <!-- add JS here -->
@endsection

<!-- PAGE CONTENT -->
@section('content')
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route("frontsite.home")}}">News</a></li>
                    <li class="breadcrumb-item active">{{$news->title}}</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Single News Start-->
        <div class="single-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="sn-container">
                            <div class="sn-img">
                                <img src="{{asset("img/".$news->image)}}" />
                            </div>
                            <div class="sn-content">
                                <h1 class="sn-title">{{$news->title}}</h1>
                                <p>{{$news->content}}</p>
                            </div>
                        </div>
                        <div class="sn-related">
                            <h2>Read More</h2>
                            <div class="row sn-slider">
                                @foreach($most_read as $read)
                                <div class="col-md-4">
                                    <div class="sn-img">
                                        <img src="{{asset("img/".$read->image)}}" />
                                        <div class="sn-title">
                                            <a href="{{$read->id}}">{{$read->title}}</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h2 class="sw-title">In This Category</h2>
                                <div class="news-list">
                                    @foreach($in_this_category as $one_news)
                                        <div class="nl-item">
                                            <div class="nl-img">
                                                <img src="{{asset("img/".$one_news->image)}}" />
                                            </div>
                                            <div class="nl-title">
                                                <a href="{{$one_news->id}}">{{$one_news->title}}</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>


                            <div class="sidebar-widget">
                                <div class="tab-news">
                                    <ul class="nav nav-pills nav-justified">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="pill" href="#featured">Featured</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#popular">Popular</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-toggle="pill" href="#latest">Latest</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="featured" class="container tab-pane active">
                                            @foreach($featured as $one_featured)
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="{{asset("img/".$one_featured->image)}}" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="{{$one_featured->id}}">{{$one_featured->title}}</a>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                        <div id="popular" class="container tab-pane fade">
                                            @foreach($popular as $one_popular)
                                                <div class="tn-news">
                                                    <div class="tn-img">
                                                        <img src="{{asset("img/".$one_popular->image)}}" />
                                                    </div>
                                                    <div class="tn-title">
                                                        <a href="{{$one_popular->id}}">{{$one_popular->title}}</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <div id="latest" class="container tab-pane fade">
                                            @foreach($latest as $one_latest)
                                            <div class="tn-news">
                                                <div class="tn-img">
                                                    <img src="{{asset("img/".$one_latest->image)}}" />
                                                </div>
                                                <div class="tn-title">
                                                    <a href="{{$one_latest->id}}">{{$one_latest->title}}</a>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single News End-->
@endsection


