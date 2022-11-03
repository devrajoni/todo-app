@extends('layouts.auth')
@section('content')
<section class="login-content">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center height-self-center">
            <div class="col-md-5 col-sm-12 col-12 align-self-center">
                <div class="sign-user_card">
                    <div class="logo-detail">
                        <a href="{{ route('home') }}">
                            <div class="d-flex align-items-center"><img src="{{ asset('/assets/images/logo.png') }}"
                                    class="img-fluid rounded-normal light-logo logo" alt="logo">
                                <h4 class="logo-title ml-3">{{ config('app.name') }}</h4>
                            </div>
                        </a>
                    </div>
                    <h3 class="mb-2">{{ __('Sign In') }}</h3>
                    <p>{{ __('Login to stay connected') }}</p>
                    <x-ui.alert :message="session('status')" type="warning" />
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="row">
                            <x-ui.input
                                group="col-lg-12"
                                :label="__('Email')"
                                type="email"
                                name="email"
                                :value="old('email')"
                                id="email"
                                
                            />

                            <x-ui.input
                                group="col-lg-12"
                                :label="__('Password')"
                                type="password"
                                name="password"
                                id="password"
                                
                            />
                            <div class="col-lg-6">
                                <div class="custom-control custom-checkbox mb-3 text-left">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="agree" @if (old('agree')) checked @endif>
                                    <label class="custom-control-label"
                                        for="customCheck1">{{ __('Remember Me') }}</label>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <a href="{{ route('password.request') }}"
                                    class="text-primary float-right">{{ __('Forgot Password?') }}</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('Sign In') }}</button>
                        <p class="mt-3 mb-0">
                            {{ __('Create an Account') }} <a href="{{ route('register') }}"
                                class="text-primary"><b>{{ __('Sign Up') }}</b></a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
