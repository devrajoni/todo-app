@extends('layouts.auth')
@section('content')
<section class="login-content">
    <div class="container h-100">
        <div class="row justify-content-center align-items-center height-self-center">
            <div class="col-md-5 col-sm-12 col-12 align-self-center">
                <div class="sign-user_card">
                    <div class="logo-detail">
                        <div class="d-flex align-items-center"><img src="{{ asset('/assets/images/logo.png') }}"
                                class="img-fluid rounded-normal light-logo logo" alt="logo">
                            <h4 class="logo-title ml-3">{{ config('app.name') }}</h4>
                        </div>
                    </div>
                    <h3 class="mb-2">{{ __('New Password') }}</h3>
                    <x-ui.alert :message="session('status')" , type="info" />
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">
                        <div class="row">
                            <x-ui.input 
                                group="col-lg-12" 
                                :label="__('Email')" 
                                type="email" 
                                name="email" 
                                id="email" 
                            />
                            <x-ui.input 
                                group="col-lg-12" 
                                :label="__('Password')" 
                                type="password" 
                                name="password"
                                id="password" 
                            />
                            <x-ui.input 
                                group="col-lg-12" 
                                :label="__('Confirm Password')" 
                                type="password"
                                name="password_confirmation" 
                                id="password_confirmation" 
                            />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">{{ __('Reset_Password') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
