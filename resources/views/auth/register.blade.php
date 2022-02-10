@extends('layouts.bootstrap')
@section('content')
<div class="container p-5">
    <div class="row">
        <div class="col-sm-12 col-lg-12 border border-dark mt-sm-5">
            <div class="row justify-content-center pt-4">
                <h2>Register</h2>
            </div>
            <div class="row justify-content-center">
                <form action="{{route('register')}}" method="POST" enctype="multipart/form-data" class="p-4" >
                    @csrf
                    <div class="form-group">
                        <label for="name" class="h6">{{__('Full Name')}}</label>
                        <input type="text" class="form-control" id="name" name="name" :value="old('name')" required autofocus autocomplete="name">
                        @error('name')
                        <p class="text-danger">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username" class="h6">{{__('Username')}}</label>
                        <input type="text" class="form-control" id="username" name="username" :value="old('username')" required autofocus autocomplete="username">
                        @error('username')
                        <p class="text-danger">
                            {{$message}}
                        </p>
                        @enderror
                    </div>
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
                    <div class="form-group">
                        <label for="password" class="h6">{{__('Password')}}</label>
                        <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
                        <small id="password_description" class="form-text text-muted">{{__("Password must be at least 10 characters and contain at least one uppercase character, one number, and one special character.")}}</small>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation" class="h6">{{__('Confirm Password')}}</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                        @error('password')
                            {{$message}}
                        @enderror
                    </div>
                    @if($errors->any())
                        <div class="col-12 my-4 bg-light border p-5">
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
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="form-group form-check text-center">
                            <input type="checkbox" class="form-check-input" id="terms" name="terms">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                    ]) !!}
                        </div>
                    @endif
                    <div class="col-12 text-center">
                        <a class="underline greenHover" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </div>
                    <div class="col-12 d-flex justify-content-center mt-3">
                        <button type="submit" class="btn btn-grad">{{__('Register')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
