<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/user') }}">
                    {{ __('adminLayout.Runescapecalculator') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp; <li><a href='/user'>{{ __('adminLayout.home') }}</a></li>
                    <li><a href='/userList'>{{ __('adminLayout.calculator') }}</a></li>
                    <li><a href='/skill'>{{ __('adminLayout.admin') }}</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">{{ __('adminLayout.login') }}</a></li>
                        <li><a href="{{ route('register') }}">{{ __('adminLayout.register') }}</a></li>

                        <li>
                            <form action="/language" method="post">
                                <select name="txtLanguage">
                                    <option value="en">{{ __('adminLayout.en') }}</option>
                                    <option value="fr">{{ __('adminLayout.fr') }}</option>
                                </select>
                                {{csrf_field()}}
                                <input type="submit" value="{{ __('adminLayout.change') }}">
                            </form>
                        </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('adminLayout.logout') }}">
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li><a href='/competence'>{{ __('adminLayout.competence') }}</a></li>
                <li><a href='/skill'>{{ __('adminLayout.skill') }}</a></li>
                <li><a href='/xpTb'>{{ __('adminLayout.xpTb') }}</a></li>
                <li> <a href='/xp'>{{ __('adminLayout.xp') }}</a></li>
            </ul>
        </div>
    </nav>
    </div>


    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
