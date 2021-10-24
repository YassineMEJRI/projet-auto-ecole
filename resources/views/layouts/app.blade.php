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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<nav class=" navbar navbar-expand-lg navbar-light bg-light boxstyle ">
    <div class="container mt-3 mb-3">
        <img src="/storage/images/logo.png" class="logo-put logo-size float-start mt-0 ml-0"/>
        <div class="collapse navbar-collapse pos" id="navbarSupportedContent ">
            <ul class=" fw-bold navbar-nav me-auto mb-2 mb-lg-0">
                @guest
                    <li class="fw-bold nav-item btn-check-preso "><a class="nav-link active colorhover mt-1" aria-current="page" href="/home">Home</a></li>
                    <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover mt-1" href="/home#about">about</a></li>
                    <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover mt-1" href="/home#team">team</a></li>
                    <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover mt-1" href="/home#contact">contact</a></li>
                    <li class="fw-bold nav-item  nav-link">  |  </li>
                    <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover mt-1" href="/login">login</a></li>
                    <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover mt-1" href="/register">register</a></li>
                @endguest
                @auth
                    <li class="fw-bold nav-item btn-check-preso text-white"><a class="nav-link active colorhover mt-1" aria-current="page" href="/home">Home</a></li>
                    @if(Auth::user()->hasRole('admin'))
                        <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover mt-1" href="/moniteur/ajouter">Inscrire un moniteur</a></li>
                        <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover mt-1" href="/quiz/ajouter">Ajouter Quiz</a></li>
                        @endif
                    @if(Auth::user()->hasRole('moniteur'))
                        <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover mt-1" href="/vehicules">Liste Vehicule</a></li>
                        <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover mt-1" href="/users">Liste Users</a></li>
                        <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover mt-1" href="/rdv/ajouter">Ajouter Rendez-vous</a></li>
                            @if(!Auth::user()->hasRole('admin'))
                                <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover mt-1" href="/rdv/schedule">Calendrier</a></li>
                            @endif
                    @elseif(Auth::user()->hasRole('userpaid'))
                        <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover mt-1" href="/test">Passer un Quiz</a></li>
                        <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover mt-1" href="/rdv/list">Reserver une séance</a></li>
                    @else
                        <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover mt-1" href="/offers">Acheter un offre</a></li>
                    @endif
                    <li class="fw-bold nav-item nav-link">  |  </li>
                        <li class="btn-check-preso colorhover">
                            @include('notification')</li>
                    <li class="nav-item btn-check-preso dropdown text-center ">
                        <a class="nav-link text-center  active colorhover" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://avatars.dicebear.com/api/initials/{{ Auth::user()->firstName }}_{{ Auth::user()->lastName }}.svg" class="disable rounded-icon active">{{ Auth::user()->firstName }} {{ Auth::user()->lastName }}
                        </a>
                        <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">logout</button>
                                </form>
                            </li>
                            <li><a class="dropdown-item" href="/parametres">parametres</a></li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<body>

<div id="app">
<!--    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
    </a>
{{--            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"--}}
{{--                    aria-controls="navbarSupportedContent" aria-expanded="false"--}}
{{--                    aria-label="{{ __('Toggle navigation') }}">--}}
{{--                <span class="navbar-toggler-icon"></span>--}}
{{--            </button>--}}
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
            <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="/parametres">Paramétres</a>
                        </li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
        </form>
    </div>
@endauth
    </div>
</nav>
-->
    <main class="py-4 container min-vh-100">
        @include('messages')
        @yield('content')
    </main>
</div>
</body>

</html>
