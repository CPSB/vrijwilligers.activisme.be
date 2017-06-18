<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} @yield('title')</title>

        {{-- Styles --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">

                        {{-- Collapsed Hamburger --}}
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        {{-- Branding Image --}}
                        <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>

                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        {{-- Left Side Of Navbar --}}
                        <ul class="nav navbar-nav">
                            @if (Auth::check())
                                @if (auth()->check() && auth()->user()->hasRole('Admin'))
                                     <li class="dropdown">
                                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            <span class="fa fa-asterisk" aria-hidden="true"></span> Logins <span class="caret"></span> 
                                        </a>
                                        <ul class="dropdown-menu">
                                            @can('view_users')
                                                <li class="{{ Request::is('users*') ? 'active' : '' }}">
                                                    <a href="{{ route('users.index') }}">
                                                        <span class="fa fa-user"></span> Users
                                                    </a>
                                                </li>
                                            @endcan

                                            @can('view_roles')
                                                <li class="{{ Request::is('roles*') ? 'active' : '' }}">
                                                    <a href="{{ route('roles.index') }}">
                                                        <span class="fa fa-lock" aria-hidden="true"></span> Roles
                                                    </a>
                                                </li>
                                            @endcan
                                        </ul>
                                    </li>
                                @endif
                            @endif

                            <li class="{{ Request::is('disclaimer*') ? 'active' : '' }}">
                                <a href="{{ route('disclaimer.index') }}">
                                    <span class="fa fa-legal" aria-hidden="true"></span> Disclaimer
                                </a>
                            </li>

                            <li class="{{ Request::is('contact*') ? 'active' : '' }} {{ Request::is('backend/contact*') ? 'active' : '' }}">
                                @if (auth()->check() && auth()->user()->hasRole('Admin')) 
                                    <a href="{{ route('contact.backend.index') }}"><span class="fa fa-envelope" aira-hidden="true"></span> Contact</a>
                                @else 
                                    <a href="{{ route('contact.index') }}"><span class="fa fa-envelope" aria-hidden="true"></span> Contact</a>
                                @endif
                            </li>
                        </ul>

                        {{-- Right Side Of Navbar --}}
                        <ul class="nav navbar-nav navbar-right">
                            {{-- Authentication Links --}}
                            @if (Auth::guest())
                                <li><a href="{{ route('login') }}"><span class="fa fa-sign-in" aria-hidden="true"></span> Login</a></li>
                            @else
                                <li>
                                    <a href="">
                                        <span class="fa fa-bell-o" aria-hidden="true"></span>
                                        <span class="badge">{{ auth()->user()->notifications->count() }}</span>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('settings.index') }}">
                                                <span class="fa fa-cogs" aria-hidden="true"></span> Account settings
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <span class="fa fa-sign-out" aria-hidden="true"></span> Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container">
                <div id="flash-msg">
                    @include('flash::message')
                </div>

                @yield('content')
            </div>
        </div>

        {{-- Scripts --}}
        <script src="{{ asset('js/app.js') }}"></script>

        @stack('scripts')

        <script>
            $(function () {
                // flash auto hide
                $('#flash-msg .alert').not('.alert-danger, .alert-important').delay(6000).slideUp(500);
            })
        </script>
    </body>
</html>
