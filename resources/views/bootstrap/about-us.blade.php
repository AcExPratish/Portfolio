@extends('layouts.bootstrap')
@section('content')
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>About Us</h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">Home</a>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="aboutus-page-section spad">
        <div class="container">
            <div class="about-page-text">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ap-title">
                            <h2>Lorem</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, assumenda consequuntur deleniti esse eveniet, iste itaque maiores molestiae nesciunt nihil non numquam quas quis quisquam quo velit vitae voluptates. Harum.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <ul class="ap-services">
                            <li><i class="icon_check"></i>Save Time with Instant Delivery</li>
                            <li><i class="icon_check"></i>100% Customer Satisfaction</li>
                            <li><i class="icon_check"></i>100% Safe Transactions</li>
                            <li><i class="icon_check"></i>Low Price, High Quality</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="about-page-services">
                <div class="row">
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="{{asset('img/blog/cd.jpg')}}">
                            <div class="api-text">
                                <a href="/categories/cd"><h3>CD</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="{{asset('img/blog/game.jpg')}}">
                            <div class="api-text">
                                <a href="/categories/game"><h3>Game</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="{{asset('img/blog/music.jpg')}}">
                            <div class="api-text">
                                <a href="/categories/music"><h3>Music</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Services</span>
                        <h2>Discover Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="gallery-item set-bg" data-setbg="{{asset('img/blog/game.jpg')}}">
                        <div class="gi-text">
                            <h3>Game</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="gallery-item set-bg" data-setbg="{{asset('img/blog/cd.jpg')}}">
                                <div class="gi-text">
                                    <h3>CD</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="gallery-item set-bg" data-setbg="{{asset('img/blog/music.jpg')}}">
                                <div class="gi-text">
                                    <h3>Music</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="gallery-item large-item set-bg" data-setbg="{{asset('img/blog/game.jpg')}}">
                        <div class="gi-text">
                            <h3>Many More</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
