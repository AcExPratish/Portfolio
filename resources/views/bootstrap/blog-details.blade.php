@extends('layouts.bootstrap')
@section('content')

    <section class="blog-details-hero set-bg" data-setbg="{{asset('img/blog/blog-details/blog-details-hero.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="bd-hero-text">
                        <span><a href="/categories/{{$posts->category->slug}}" class="text-white">{{$posts->category->name}}</a></span>
                        <h2 class="text-white">{{ucfirst($posts->title)}}</h2>
                        <ul>
                            <li class="b-time text-white"><i class="icon_clock_alt"></i> <time>{{$posts->published_at}}</time></li>
                            <li class="text-white"><i class="icon_profile"></i>{{ucfirst($posts->user->name)}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-details-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="blog-details-text">
                        <p>
                            {!! ucfirst($posts->body) !!}
                        </p>
                        <div class="bd-pic">
                            <div class="bp-item">
                                <img src="{{asset('img/blog/game.jpg')}}" alt="">
                            </div>
                            <div class="bp-item">
                                <img src="{{asset('img/blog/cd.jpg')}}" alt="">
                            </div>
                            <div class="bp-item">
                                <img src="{{asset('img/blog/music.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="bd-more-text">
                            <div class="bm-item">
                                <h4>{!! ucfirst($posts->excerpt) !!}</h4>
                                <p>{!! ucfirst($posts->body) !!}</p>
                            </div>
                            <div class="bm-item">
                                <h4>{!! ucfirst($posts->excerpt) !!}</h4>
                                <p>{!! ucfirst($posts->body)  !!}</p>
                            </div>
                        </div>
                        <div class="tag-share">
                            <div class="social-share">
                                <span>Share:</span>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-tripadvisor"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-youtube-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($posts->category->name=$posts->category->name)
        <section class="recommend-blog-section spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h2>Recommended</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @for($i=0;$i<3;$i++)
                        <div class="col-md-4">
                            <div class="blog-item set-bg" data-setbg="{{asset('img/blog/'.$posts->category->thumbnail.'.jpg')}}">
                                <div class="bi-text">
                                    <span class="b-tag"><a href="/categories/details/{{$posts->category->slug}}" class="text-white">{{$posts->category->name}}</a></span>
                                    <h4><a href="/blog/details/{{$posts->slug}}">{{ucfirst($posts->title)}}</a></h4>
                                    <div class="b-time"><i class="icon_clock_alt"></i>{{$posts->published_at}}</div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </section>
    @endif
@endsection
