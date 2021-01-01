<!-- EXTEND MASTER LAYOUT -->
@extends('frontsite.layouts.master')
<!-- TITLE -->
@section('page-title')
    Home
@endsection

<!-- CSS CODE -->
@section('css_code')
    <!-- add css here -->
@endsection

<!-- JS CODE -->
@section('js_code')
    <!-- add JS here -->
@endsection

<!-- CONTENT PAGE -->
@section('content')
    <!-- Top News Start-->
    <div class="top-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 tn-left">
                        <div class="row tn-slider">
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/{{$newses[1]->image}}" />
                                    <div class="tn-title">
                                        <a href="news/{{$newses[1]->id}}">{{$newses[1]->title}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/{{$newses[2]->image}}" />
                                    <div class="tn-title">
                                        <a  href="news/{{$newses[1]->id}}">{{$newses[2]->title}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 tn-right">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/{{$newses[3]->image}}" />
                                    <div class="tn-title">
                                        <a href="news/{{$newses[3]->id}}">{{$newses[3]->title}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/{{$newses[4]->image}}" />
                                    <div class="tn-title">
                                        <a href="news/{{$newses[4]->id}}">{{$newses[4]->title}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/{{$newses[5]->image}}" />
                                    <div class="tn-title">
                                        <a href="news/{{$newses[5]->id}}">{{$newses[5]->title}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="img/{{$newses[6]->image}}" />
                                    <div class="tn-title">
                                        <a href="news/{{$newses[6]->id}}">{{$newses[6]->title}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Top News End-->

    <!-- Category News Start-->
    <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>{{$categories[0]->category_name}}</h2>
                        <div class="row cn-slider">
                            @foreach($sport as $news_sport)
                                <div class="col-md-6">
                                    <div class="cn-img">
                                        <img src="img/{{$news_sport->image}}" />
                                        <div class="cn-title">
                                            <a href="news/{{$news_sport->id}}">{{$news_sport->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>{{$categories[1]->category_name}}</h2>
                        <div class="row cn-slider">
                            @foreach($internet as $news_internet)
                                <div class="col-md-6">
                                    <div class="cn-img">
                                        <img src="img/{{$news_internet->image}}" />
                                        <div class="cn-title">
                                            <a href="news/{{$news_internet->id}}">{{$news_internet->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Category News End-->

    <!-- Category News Start-->
    <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2>{{$categories[2]->category_name}}</h2>
                        <div class="row cn-slider">
                            @foreach($business as $news_business)
                                <div class="col-md-6">
                                    <div class="cn-img">
                                        <img src="img/{{$news_business->image}}" />
                                        <div class="cn-title">
                                            <a href="news/{{$news_business->id}}">{{$news_business->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>{{$categories[3]->category_name}}</h2>
                        <div class="row cn-slider">
                            @foreach($tech as $news_tech )
                                <div class="col-md-6">
                                    <div class="cn-img">
                                        <img src="img/{{$news_tech->image}}" />
                                        <div class="cn-title">
                                            <a href="news/{{$news_tech->id}}">{{$news_tech->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Category News End-->

    <!-- Tab News Start-->
    <div class="tab-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#featured">Featured News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#popular">Popular News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#latest">Latest News</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="featured" class="container tab-pane active">
                                @foreach($featured as $feature_news)
                                    <div class="tn-news">
                                        <div class="tn-img">
                                            <img src="img/{{$feature_news->image}}" />
                                        </div>
                                        <div class="tn-title">
                                            <a href="news/{{$feature_news->id}}">{{$feature_news->title}}</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div id="popular" class="container tab-pane fade">
                                @foreach($popular as $popular_news)
                                    <div class="tn-news">
                                        <div class="tn-img">
                                            <img src="img/{{$popular_news->image}}" />
                                        </div>
                                        <div class="tn-title">
                                            <a href="news/{{$popular_news->id}}">{{$popular_news->title}}</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div id="latest" class="container tab-pane fade">
                                @foreach($latest as $latesr_news)
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/{{$latesr_news->image}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="news/{{$latesr_news->id}}">{{$latesr_news->title}}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#m-viewed">Most Viewed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-read">Most Read</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-recent">Most Read</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="m-viewed" class="container tab-pane active">
                                @foreach($views as $views_news)
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="img/{{$views_news->image}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="news/{{$views_news->id}}">{{$views_news->title}}</a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <div id="m-read" class="container tab-pane fade">
                                @foreach($most_read as $most_read_news)
                                    <div class="tn-news">
                                        <div class="tn-img">
                                            <img src="img/{{$most_read_news->image}}" />
                                        </div>
                                        <div class="tn-title">
                                            <a href="news/{{$most_read_news->id}}">{{$most_read_news->title}}</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div id="m-recent" class="container tab-pane fade">
                                @foreach($most_recent as $recent_news)
                                    <div class="tn-news">
                                        <div class="tn-img">
                                            <img src="img/{{$recent_news->image}}" />
                                        </div>
                                        <div class="tn-title">
                                            <a href="news/{{$recent_news->id}}">{{$recent_news->title}}</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Tab News Start-->

    <!-- Main News Start-->
    <div class="main-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            @foreach($home_news as $home)
                                <div class="col-md-4">
                                    <div class="mn-img">
                                        <img src="img/{{$home->image}}" />
                                        <div class="mn-title">
                                            <a href="news/{{$home->id}}">{{$home->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="mn-list">
                            <h2>Read More</h2>
                            <ul>
                                @foreach($read_more as $read)
                                    <li><a href="news/{{$read->id}}">{{$read->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Main News End-->
@endsection
