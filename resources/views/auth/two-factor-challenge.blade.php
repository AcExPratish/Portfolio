@extends('layouts.bootstrap')
@section('content')
<div class="container mt-2 mb-4 p-5" x-data="{ recovery: false }">
    <div class="row">
        <div class="col-sm-12 col-lg-12 mt-3 border border-dark">
            <div class="row justify-content-center pt-4">
                <h2 class="text-center">
                    {{ __('Two Factor Authentication') }}
                </h2>
            </div>
            <div class="row justify-content-center pt-4" x-show="! recovery">
                <p class="text-center">
                    {{ __('Please confirm access to your account by entering the authentication code provided by your authenticator application.') }}
                </p>
            </div>
            <div class="row justify-content-center pt-4" x-show="recovery">
                <p>
                    {{ __('Please confirm access to your account by entering one of your emergency recovery codes.') }}
                </p>
            </div>
            <div class="row justify-content-center ">
                <form action="{{route('two-factor.login')}}" method="POST" enctype="multipart/form-data" class="p-4" >
                    @csrf
                    <div class="form-group" x-show="! recovery">
                        <label for="code" class="h6">{{ __('Authentication Code') }}</label>
                        <input type="text" class="form-control" id="code" name="code" autofocus x-ref="code" autocomplete="one-time-code" inputmode="numeric">
                    </div>
                    <div class="form-group" x-show="recovery">
                        <label for="recovery_code" class="h6">{{ __('Recovery Code') }}</label>
                        <input id="recovery_code" class="form-control" type="password" autofocus name="recovery_code" x-ref="recovery_code" autocomplete="one-time-code">
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <button type="button" class="btn btn-info" x-show="! recovery" x-on:click="recovery = true; $nextTick(() => { $refs.recovery_code.focus() })">
                            {{ __('Use a recovery code') }}
                        </button>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <button type="button" class="btn btn-info" x-show="recovery" x-on:click="recovery = false; $nextTick(() => { $refs.code.focus() })">
                            {{ __('Use an authentication code') }}
                        </button>
                    </div>
                    <div class="form-group  d-flex justify-content-center">
                        <button type="submit" class="btn btn-grad">
                            {{ __('Submit') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
