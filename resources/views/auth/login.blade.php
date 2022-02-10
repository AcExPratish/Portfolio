@extends('layouts.bootstrap')
@section('content')
<div class="container mt-2 mb-4 p-5">
    <div class="row">
        <div class="col-sm-12 col-lg-12 mt-3 border border-dark">
            <div class="row justify-content-center pt-4">
                <h2>Login</h2>
            </div>
            <div class="row justify-content-center">
                <form action="{{route('login')}}" method="POST" enctype="multipart/form-data" class="p-4" >
                    @csrf
                    <div class="form-group">
                        <label for="email" class="h6">{{__('Email Address')}}</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email" :value="old('email')" required autofocus>
                        <small id="email_description" class="form-text text-muted">
                            {{__("We'll never share your email with anyone else.")}}
                        </small>
                        @error('email')
                            <p class="text-danger">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password" class="h6">{{__('Password')}}</label>
                        <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
                    </div>
                    <div class="form-group form-check text-center">
                        <input type="checkbox" class="form-check-input" id="remember_me" name="remember">
                        <label class="form-check-label" for="remember_me">{{__('Remember Me')}}</label>
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        @if (Route::has('password.request'))
                            <a class="underline greenHover" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                    <div class="col-12 d-flex justify-content-center">
                        <button type="submit" class="btn btn-grad">{{__('Log In')}}</button>
                    </div>
                    @if($errors->any())
                        <div class="col-12 mt-4 bg-light border p-5">
                            <ul>
                                <div class="row justify-content-center">
                                    <span class="h6 text-center text-danger">
                                        Whooops! Something went wrong.
                                    </span>
                                </div>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
