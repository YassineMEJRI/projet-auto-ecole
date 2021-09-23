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
                    <li class="fw-bold nav-item btn-check-preso "><a class="nav-link active colorhover" aria-current="page" href="/home">Home</a></li>
                    <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover" href="/home#about">about</a></li>
                    <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover" href="/home#team">team</a></li>
                    <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover" href="/home#contact">contact</a></li>
                    <li class="fw-bold nav-item  nav-link">  |  </li>
                    <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover" href="/login">login</a></li>
                    <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover" href="/register">register</a></li>
                @endguest
                @auth
                    <li class="fw-bold nav-item btn-check-preso text-white"><a class="nav-link active colorhover" aria-current="page" href="/home">Home</a></li>
                    @if(Auth::user()->hasRole('admin'))
                        <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover" href="/moniteur/ajouter">Inscrire un moniteur</a></li>
                    @endif
                    @if(Auth::user()->hasRole('moniteur'))
                        <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active" href="/vehicules">Liste Vehicule</a></li>
                        <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active" href="/quiz/ajouter">Ajouter Quiz</a></li>
                        <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active" href="/users">Liste Users</a></li>
                        <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active" href="/rdv/ajouter">Ajouter Rendez-vous</a></li>
                    @elseif(Auth::user()->hasRole('userpaid'))
                        <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover" href="/test">Passer un Quiz</a></li>
                        <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover" href="/rdv/list">Reserver une séance</a></li>
                    @else
                        <li class="fw-bold nav-item btn-check-preso"><a class="nav-link active colorhover" href="/offers">Acheter un offre</a></li>
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
<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas fa-gem me-3"></i>Company name
                    </h6>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Products
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Angular</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">React</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Vue</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Laravel</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Pricing</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Orders</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Contact
                    </h6>
                    <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fas fa-envelope me-3"></i>
                        info@example.com
                    </p>
                    <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                    <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
</html>
