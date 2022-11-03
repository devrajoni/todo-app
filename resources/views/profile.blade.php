@extends('layouts.app')

@section('content')
<x-ui.top-navbar />

<x-ui.drawer />

<div class="content-page">
    <div class="container-fluid note-details">

        <x-ui.header />
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-block card-stretch">
                    <div class="card-body text-center">
                        <img src="{{auth()->user()->profileImage}}" class="img-fluid rounded" width="250"
                            height="250" alt="user" />
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-block card-stretch">
                    <div class="card-body text-center">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link {{ $tab == 'profile' ? 'active' : '' }}" id="profile" href="{{ route('profile.index', 'profile') }}"
                                    role="tab" >{{__('Profile')}}</a>
                                <a class="nav-item nav-link {{ $tab == 'edit_profile' ? 'active' : '' }}" id="edit_profile"  href="{{ route('profile.index','edit_profile') }}"
                                    role="tab">{{__('Edit')}}</a>
                                <a class="nav-item nav-link {{ $tab == 'change_password' ? 'active' : '' }}" id="change_password"  href="{{ route('profile.index','change_password') }}"
                                    role="tab">{{__('Change Password')}}</a>
                            </div>
                        </nav>
                        <div class="tab-content text-left" id="nav-tabContent">
                            @if($tab == 'profile')
                            <div class="tab-pane fade active show" id="profile" role="tabpanel"
                                >
                                <div class="row border-bottom py-2">
                                    <div class="col-sm-3">
                                        {{__('Name')}}
                                    </div>
                                    <div class="col-sm-9">
                                        {{ auth()->user()->name ?? 'N/A' }}
                                    </div>
                                </div>
                                <div class="row border-bottom py-2">
                                    <div class="col-sm-3">
                                        {{__('Email')}}
                                    </div>
                                    <div class="col-sm-9">
                                        {{ auth()->user()->email ?? 'N/A' }}
                                    </div>
                                </div>
                            </div>
                            @endif

                            @if($tab == 'edit_profile')
                            <div class="tab-pane fade active show" id="edit_profile" role="tabpanel">
                                <form method="POST" action="{{ route('profile.update', auth()->id()) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="row border-bottom py-2">
                                        <x-ui.input 
                                         group="col-lg-12"
                                         :label="__('Name')" 
                                         type="text" 
                                         name="name" 
                                         :value="auth()->user()->name ?? null"
                                         id="name" />

                                        <x-ui.input 
                                        group="col-lg-12" 
                                        :label="__('Email')" 
                                        type="email" 
                                        name="email"
                                        :value="auth()->user()->email ?? null"
                                        id="email" />

                                    </div>
                                    <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                                </form>
                            </div>
                            @endif
                            @if($tab == 'change_password')
                            <div class="tab-pane fade active show" id="change_password" role="tabpanel">
                                <form action="{{ route('auth.password_change') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <x-ui.input 
                                        group="col-lg-12" 
                                        :label="__('Current Password')" 
                                        type="password"
                                        name="current_password" 
                                        id="current_password" 
                                        />

                                        <x-ui.input 
                                        group="col-lg-12" 
                                        :label="__('New Password')" 
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
                                   <button type="submit" class="btn btn-primary">{{ __('Change Password') }}</button>
                                </form>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection