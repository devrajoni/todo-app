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
                    <h3 class="mb-2">{{ __('Email Verification') }}</h3>
                    <p>{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                    </p>
                    @if (session('status') == 'verification-link-sent')
                    <x-ui.alert
                        :message=" __('A new verification link has been sent to the email address you provided during registration.')"
                        type="success" />
                    @endif
                    <div class="mt-4 flex items-center justify-between">
                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf

                            <div>
                                <button>{{ __('Resend Verification Email') }}</button>
                            </div>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
