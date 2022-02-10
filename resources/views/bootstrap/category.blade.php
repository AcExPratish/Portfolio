@extends('layouts.bootstrap')
@section('content')
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>{{__('Categories')}}</h2>
                        <div class="bt-option">
                            <a href="{{route('home')}}">{{__('Home')}}</a>
                            <span>{{__('Categories Grid')}}</span>
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
                            <div class="blog-item set-bg" data-setbg="{{asset('img/blog/'. $post->name . '.jpg')}}">
                                <div class="bi-text">
                                    <a href="/categories/{{$post->name}}" class="b-tag">{{ucfirst($post->name)}}</a>
                                    <h4><a href="/categories/{{$post->name}}">{{ucfirst($post->slug)}}</a></h4>
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
            {{"No Categories Yet"}}
        </div>
    @endif
@endsection
