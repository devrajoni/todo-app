@extends('layouts.auth')
@section('content')
<header>
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand p-3" href="{{route('login')}}">
    <div class="d-flex align-items-center">
        <img class="mr-2" src="{{ asset('assets/images/logo.png') }}" height="40px" alt="logo" />
        <div style="font-size: 25px;" >{{ config('app.name')}}</div>
    </div>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto p-3 p-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">{{__('Home')}}</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('login') }}">{{__('Login')}}</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('register') }}">{{__('Register')}}</a>
      </li>
    </ul>
  </div>
</nav>
</header>
<section>
    <div class="container h-100">
        <div class="row justify-content-center align-items-center height-self-center" style="height: calc(100vh - 88px);">
            <div class="col-lg-12">
              <h1>{{__('Organize your work and life, finally.')}}</h1>
              <p class="pt-3">Become focused, organized, and calm with <b>{{config('app.name')}}</b>. The world’s #1 task manager and <b>{{config('app.name')}}</b> app.</p>
              <a href="{{ route('login') }}" class="btn btn-primary">{{__('Get Started.')}}</a>
            </div>
        </div>
    </div>
</section>
@endsection
