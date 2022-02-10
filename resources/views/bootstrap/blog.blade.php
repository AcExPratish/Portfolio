@extends('layouts.bootstrap')
@section('content')
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>{{__('Product')}}</h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">{{__('Home')}}</a>
                            <span>{{__('Product Grid')}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(count($posts))
        <section class="blog-section blog-page spad">
            <div class="container">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-lg-4 col-md-6">
                            <div class="blog-item set-bg" data-setbg="{{asset('img/blog/'. $post->category->name . '.jpg')}}">
                                <div class="bi-text">
                                    <a href="/categories/{{$post->category->name}}" class="b-tag">{{ucfirst($post->category->name)}}</a>
                                    <h4><a href="/blog/details/{{$post->slug}}">{{ucfirst($post->title)}}</a></h4>
                                    <div class="b-time"><i class="icon_clock_alt"></i>Published : <time>{{$post->published_at}}</time></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <div class="row w-100 justify-content-center mb-5">
            {{$posts->links('vendor.pagination.bootstrap-4')}}
        </div>
    @else
        <div class="row justify-content-center h1 mb-5 p-5 alert alert-info">
            {{"No Product's Yet"}}
        </div>
    @endif
@endsection
