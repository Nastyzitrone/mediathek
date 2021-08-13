<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Mediathek') }}</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased background-color-two">
        <div class="full-width background-color-four">
            <div class="container">
                <nav class="navbar background-color-four" role="navigation" aria-label="main navigation">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="https://bulma.io">
                            {{ config('app.name', 'Mediathek') }}
                        </a>
                
                        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                            <span aria-hidden="true"></span>
                        </a>
                    </div>
                
                    <div id="navbarBasicExample" class="navbar-menu">
                        <div class="navbar-start">
                            <a class="navbar-item">
                            Home
                            </a>
                    
                            <a class="navbar-item">
                            Users
                            </a>
                    
                            <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                More
                            </a>
                    
                            <div class="navbar-dropdown">
                                <a class="navbar-item">
                                About
                                </a>
                                <a class="navbar-item">
                                Jobs
                                </a>
                                <a class="navbar-item">
                                Contact
                                </a>
                                <hr class="navbar-divider">
                                <a class="navbar-item">
                                Report an issue
                                </a>
                            </div>
                            </div>
                        </div>
                    
                        <div class="navbar-end">
                            <div class="navbar-item">
                                <div class="buttons">
                                    @if (Route::has('login'))
                                    
                                        @auth
                                            <a href="{{ route('/home') }}">Home</a>
                                        @else
                                            <a href="{{ route('login') }}" class="button is-light">Login</a>
                    
                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}" class="button is-primary">Register</a>
                                            @endif
                                        @endauth
                                
                                    @endif   
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>         
            </div>
        </div>

        <main class="container"> @yield('content')</main>
    </body>
</html>
