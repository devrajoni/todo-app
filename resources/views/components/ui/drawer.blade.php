<div class="iq-sidebar sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="{{ route('dashboard') }}" class="header-logo">
            <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid rounded-normal light-logo" alt="logo" />
            <h4 class="logo-title ml-3">{{ config('app.name')}}</h4>
        </a>
        <div class="iq-menu-bt-sidebar">
            <i class="las la-times wrapper-menu"></i>
        </div>
    </div>

    <div class="sidebar-caption dropdown d-block mt-3">
        <a href="#" class="iq-user-toggle d-flex align-items-center justify-content-between" id="dropdownMenuButton"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{auth()->user()->profileImage}}" class="img-fluid rounded avatar-50 mr-3" alt="user">
            <div class="caption">
                <h6 class="mb-0 line-height">{{ auth()->user()->name }}</h6>
            </div>
            <i class="las la-angle-down"></i>
        </a>

        <div class="dropdown-menu w-100 border-0 my-2" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item mb-2" href="{{route('profile.index')}}">
                <i class="lar la-user-circle font-size-20 mr-1"></i>
                <span class="mt-2">My Profile</span>
            </a>
            <hr class="my-2">

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a class="dropdown-item" :href="{{ route('logout') }}"
                    onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="las la-sign-out-alt font-size-20 mr-1"></i>
                    <span>Logout</span>
                </a>
            </form>
        </div>
    </div>

    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="active">
                    <a href="{{ route('dashboard') }}" class="svg-icon">
                        <i>
                            <svg class="svg-icon" id="iq-main-1" width="20" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                            </svg>
                        </i>
                        <span>{{__('Dashboard')}}</span>
                    </a>
                    <ul id="index" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    </ul>
                </li>

                <li>
                    <a href="{{ route('tasks.index') }}" class="svg-icon">
                        <i>
                            <svg width="23" class="svg-icon" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                </path>
                            </svg>
                        </i>
                        <span>{{ __('Task') }}</span>
                    </a>
                </li>
            </ul>
        </nav>

    </div>
</div>
