<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Stlylesheet -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css-front-page/font-awesome/css/font-awesome.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css-front-page/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css-front-page/no-ui-slider/jquery.nouislider.css') }}" type="text/css" />
    <!-- Skin Color -->
    <link rel="stylesheet" href="{{ asset('css-front-page/colors/green.css') }}" id="color-skins"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles  <link  rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css"/> -->

    <script type="text/javascript" src="{{asset('js-front-page/plugins/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js' ) }}"></script>
    <script type="text/javascript" src="{{ asset('js-front-page/plugins/moderniz.min.js' ) }}"></script>
    <script type="text/javascript" src="{{ asset('js-front-page/plugins/smoothscroll.min.js' ) }}"></script>
    <script type="text/javascript" src="{{ asset('js-front-page/no-ui-slider/jquery.nouislider.all.min.js' ) }}"></script>
    <script type="text/javascript" src="{{ asset('js-front-page/plugins/revslider.min.js' ) }}"></script>
    <script type="text/javascript" src="{{ asset('js-front-page/plugins/waypoints.min.js' ) }}"></script>
    <script type="text/javascript" src="{{ asset('js-front-page/plugins/parallax.min.js' ) }}"></script>
    <script type="text/javascript" src="{{ asset('js-front-page/plugins/easign1.3.min.js' ) }}"></script>
    <script type="text/javascript" src="{{ asset('js-front-page/plugins/cubeportfolio.min.js' ) }}"></script>
    <script type="text/javascript" src="{{ asset('js-front-page/plugins/owlcarousel.min.js' ) }}"></script>
    <script type="text/javascript" src="{{ asset('js-front-page/plugins/tweetie.min.js' ) }}"></script>
    <script type="text/javascript" src="{{ asset('http://maps.googleapis.com/maps/api/js' ) }}"></script>
    <script type="text/javascript" src="{{ asset('js-front-page/plugins/gmap3.min.js' ) }}"></script>
    <script type="text/javascript" src="{{ asset('js-front-page/plugins/wow.min.js' ) }}"></script>
    <script type="text/javascript" src="{{ asset('js-front-page/plugins/counterup.min.js' ) }}"></script>
</head>
<header>
    @auth
        <img src="https://avatar.oxro.io/avatar.svg?name=Mourad&background=337ab7&length=1" class="rounded-icon">
    @endauth
    <nav class="navbar navbar-default navbar-alt navbar-small">

        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand to-top" rel="home" href="#">
                </a>
            </div>
            @guest
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav  navbar-right">
                    <li>
                        <a class="to-top" onclick="window.location.href='../about#home';">
                            Home
                        </a>
                    </li>
                    <li class="to-section ">
                        <a href="#about" onclick="window.location.href='../about#about';">
                            About Us
                        </a>
                    </li>
                    <li class="to-section" >
                        <a href="#team" onclick="window.location.href='../about#team';">
                            Team
                        </a>
                    </li>
                    <li class="to-section">
                        <a href="#contact"onclick="window.location.href='../about#contact';">
                            Contact
                        </a>
                    </li>
                    <li class="to-section">
                        <a>
                            |
                        </a>
                    </li>

                    <li class="to-section">

                        <a role="button" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="to-section">
                        <a role="button" href="{{ route('register') }}">Register</a>
                    </li>
                    @endguest

                    @auth
                        <div class="collapse navbar-collapse" id="main-nav">
                            <ul class="nav navbar-nav  navbar-right">
                                <li>
                                    <a class="to-top" href="/vehicules/create">Ajouter un nouveau vehicule
                                    </a>
                                </li>
                                <li class="to-section ">
                                    <a class="to-top" href="/quiz/ajouter">Ajouter un quiz
                                    </a>
                                </li>
                                <li class="to-section">
                                    <a class="to-top" href="/users">liste des utilisateurs
                                    </a>
                                </li>
                                <li class="disable to-section">
                                    <a>
                                        |
                                    </a>
                                </li>
                                <li>
                                    <img src="https://avatars.dicebear.com/api/initials/{{ Auth::user()->firstName }}_{{ Auth::user()->lastName }}.svg?background=%230000ff" class="disable rounded-icon">
                                </li>
                                <li class="to-section mt-3">
                        <div class="dropdown text-center ">
                            <a class="to-section" href="#" role="button" id="dropdownMenuLink"
                               data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->firstName }} {{ Auth::user()->lastName }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink ml-5">
                                <li><a class="dropdown-item text-center" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a></li>
                            </ul>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                        </li>
                            </ul>
                            @endauth

            </div>
        </div>
    </nav>
</header>
@guest
<body class="back">
@endguest
@auth
<body>
@endauth
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            @guest
                <div class="d-grid gap-2 d-md-block">
                    <a role="button" href="{{ route('login') }}" class="btn btn-light">Login</a>
                    <a role="button" href="{{ route('register') }}" class="btn btn-light">Register</a>
                </div>
            @endguest
            @auth
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->firstName }} {{ Auth::user()->lastName }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a></li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            @endauth
        </div>
    </nav>

    <main class="py-4 container min-vh-100">
        @include('messages')
        @yield('content')
    </main>
</div>
</body>

</html>
