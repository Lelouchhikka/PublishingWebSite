<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/a37e49b39b.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <link href="{{ asset('css/custom.css') }}" type="text/css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-nav shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{url("/images/logo_text.png")}}" style="display: inline-block; width: 10rem;height: 4rem">
                </a>

                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
                    <!-- Right Side Of Navbar -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        <div class="img_home">
            <div class="logo_asylmura">
                <img class="logo_asylmura" src="{{url("/images/logo.png")}}"/>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light fw-bold">

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item  ">
                            <a class="nav-link item_img" href="{{route('home')}}">??????????????</a>
                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link item_img" href="{{route('teachers')}}">???????????? ??????????????</a>
                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link item_img" href="{{route('students')}}">??????????????</a>
                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link item_img" href="{{route('journals')}}">??????????????</a>
                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link item_img" href="{{route('about')}}">?? ??????</a>
                        </li>
                        <li class="nav-item  ">
                            <a class="nav-link item_img" href="{{route('contacts')}}">????????????????</a>
                        </li>
                        @if(Auth::check())
                            <li class="nav-item  ">
                                <a class="nav-link item_img" href="{{url('admin/'.'students')}}">???????????????? ????????????????</a>
                            </li>
                            <li class="nav-item  ">
                                <a class="nav-link item_img" href="{{url('admin/'.'journals')}}">???????????????? ????????????</a>
                            </li>
                            <li class="nav-item  ">
                                <a class="nav-link item_img" href="{{url('admin/'.'teachers')}}">???????????????? ??????????????</a>
                            </li>
                            <li class="nav-item  ">
                                <a class="nav-link item_img" href="{{url('admin/'.'aboutUs')}}">?????????????????????????? ????????????????</a>
                            </li>
                        @endif
                    </ul>
                </div>
            </nav>

        </div>
        <main class="py-4 bg-default">
            @yield('content')
        </main>

    </div>
    @include('layouts.footer')
</body>
</html>
