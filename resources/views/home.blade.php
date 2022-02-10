@extends('layouts.bootstrap')
@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="hero-text">
                        <h1 class="text-shadow-header">Component 3</h1>
                        <p class="text-shadow-text">
                            Name : Pratish Joshi <br>
                            University ID : 77227181
                        </p>
                        <a href="#" class="primary-btn text-shadow-text">Discover Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/dota.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/new_world.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/valorant.jpg"></div>
        </div>
    </section>

    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>Change Yourself, <br />Not the Future</h2>
                        </div>
                        <p class="f-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A commodi consequatur corporis cumque doloribus exercitationem, expedita fugiat inventore ipsam iure labore laborum magnam nostrum reprehenderit sed sit temporibus veniam veritatis.</p>
                        <a href="#" class="primary-btn about-btn">Read  More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{asset('img/blog/game.jpg')}}" alt="">
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('img/blog/music.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What We Do</span>
                        <h2>Discover Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="fa fa-chrome font-awesome mt-3" aria-hidden="true"></i>
                        <h4>CD</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="fa fa-gamepad font-awesome mt-3" aria-hidden="true"></i>
                        <h4>Game</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="fa fa-music font-awesome mt-3" aria-hidden="true"></i>
                        <h4>Music</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Latest Blog's</span>
                        <h2>Our Blog & Event</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="{{asset('img/blog/music.jpg')}}">
                        <div class="bi-text">
                            <a href="/categories/music" class="b-tag">Music</a>
                            <h4><a href="/categories/music">Music</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="{{asset('img/blog/game.jpg')}}">
                        <div class="bi-text">
                            <a href="/categories/game" class="b-tag">Game</a>
                            <h4><a href="/categories/game">Game</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item set-bg" data-setbg="{{asset('img/blog/cd.jpg')}}">
                        <div class="bi-text">
                            <a href="/categories/cd" class="b-tag">CD</a>
                            <h4><a href="/categories/cd">CD</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="blog-item small-size set-bg" data-setbg="img/blog/game.jpg">
                        <div class="bi-text">
                            <a href="/categories/cd" class="b-tag">CD</a>
                            <h4><a href="/categories/cd">CD</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-item small-size set-bg" data-setbg="img/blog/music.jpg">
                        <div class="bi-text">
                            <a href="/categories/music" class="b-tag">Music</a>
                            <h4><a href="/categories/music">Music</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
