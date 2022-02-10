@extends('layouts.bootstrap')
@section('content')
<div class="container p-5">
    <div class="row">
        <div class="col-12 p-5 border border-dark my-5">
            <div class="row">
                <div class="col-12 text-center pt-4 h3 font">
                    {{__('Forgot Your Password?')}}
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <p class="text-center w-75">
                    {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </p>
            </div>
            <form method="POST" action="{{ route('password.email') }}" enctype="multipart/form-data" class="mt-5">
                @csrf
                <div class="form-group">
                    <label for="email" class="h6">{{__('Email Address')}}</label>
                    <input type="email" class="form-control" id="email" name="email" :value="old('email')" required aria-describedby="emailHelp">
                    <small id="email_description" class="form-text text-muted">{{__("We'll never share your email with anyone else.")}}</small>
                    @error('email')
                    <p class="text-danger">
                        {{$message}}
                    </p>
                    @enderror
                </div>
                <div class="col-12 d-flex justify-content-lg-end justify-content-sm-center mt-3">
                    <button type="submit" class="btn btn-grad">{{__('Email Password Reset Link')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
