<!DOCTYPE html>
<!--
	 by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->

<html lang="en">
<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Auto-école</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Stlylesheet -->
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css-front-page/font-awesome/css/font-awesome.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css-front-page/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css-front-page/no-ui-slider/jquery.nouislider.css') }}" type="text/css" />

    <!-- Skin Color -->
    <link rel="stylesheet" href="{{ asset('css-front-page/colors/green.css') }}" id="color-skins"/>
</head>
<header>
    <nav class="navbar navbar-default navbar-small">
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
                    <img src="storage/images/logo.png" class="logo-put logo-size float-start mt-0 ml-1" style="width: 10%; height: 10%;"/>
                    <ul class="nav navbar-nav  navbar-right">
                        <li class="to-top btn-check-preso sizebox"><a href="/home#home-revolution-slider">Home</a></li>                        <li class="to-section btn-check-preso"><a href="/home#about">About Us</a></li>
                        <li class="to-section btn-check-preso sizebox" ><a href="/home#team" >Team</a></li>
                        <li class="to-section btn-check-preso sizebox"><a href="/home#contact">Contact</a></li>
                        <li class="to-section"><a>|</a></li>
                        <li class="to-section btn-check-preso sizebox"><a role="button" href="{{ route('login') }}">Login</a></li>
                        <li class="to-section btn-check-preso sizebox"><a role="button" href="{{ route('register') }}">Register</a></li>
                    </ul>
                </div>
            @endguest
            @auth
                <div class="collapse navbar-collapse" id="main-nav">
                    <img src="storage/images/logo.png" class="logo-put logo-size float-start mt-0 ml-1" style="width: 10%; height: 10%;"/>
                    <ul class="nav navbar-nav  navbar-right">
                        <li class="to-top btn-check-preso"><a href="/home#home-revolution-slider" class=" nav-link active colorhover sizebox">Home</a></li>
                        @if(Auth::user()->hasRole('admin'))
                        <li class="to-section btn-check-preso "><a class="nav-link active colorhover sizebox" href="/moniteur/ajouter">Inscrire un moniteur</a></li>
                        @endif
                        @if(Auth::user()->hasRole('moniteur'))
                        <li class="to-section btn-check-preso"><a class="nav-link active colorhover sizebox" href="/vehicules">Liste Vehicule</a></li>
                        <li class="to-section btn-check-preso"><a class="nav-link active colorhover sizebox" href="/quiz/ajouter">Ajouter Quiz</a></li>
                        <li class="to-section btn-check-preso"><a class="nav-link active colorhover sizebox" href="/users">Liste Users</a></li>
                        <li class="to-section btn-check-preso"><a class="nav-link active colorhover sizebox" href="/rdv/ajouter">Ajouter Rendez-vous</a></li>
                        @elseif(Auth::user()->hasRole('userpaid'))
                            <li class="to-section btn-check-preso"><a class="nav-link active colorhover sizebox" href="/test">Passer un Quiz</a></li>
                            <li class="to-section btn-check-preso"><a class="nav-link active colorhover sizebox" href="/rdv/list">Reserver une séance</a></li>
                        @endif
                            <li class="disable to-section"><a>|</a></li>
                        <li class=" btn-check-preso pl-4 pr-4">
                            @include('notification')
                        </li>
                        <li class="nav-item btn-check-preso dropdown text-center sizebox">
                            <a class="nav-link text-center dropdown-toggle active colorhover mtinv2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://avatars.dicebear.com/api/initials/{{ Auth::user()->firstName }}_{{ Auth::user()->lastName }}.svg" class="mr-2 rounded-icon active">{{ Auth::user()->firstName }} {{ Auth::user()->lastName }}
                            </a>
                            <ul class="dropdown-menu dropdown-toggle text-center" aria-labelledby="navbarDropdown">
                                <li><form action="/logout" method="POST">
                                        @csrf
                                        <a type="submit" class="dropdown-item-style text-center stylelist"><button type="submit" >logout</button></a>
                                    </form>
                                </li>
                                <li>
                                    <a class="dropdown-item-style text-center stylelist" href="/parametres">parametres</a>
                                </li>
                            </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            @endauth
        </div>
    </nav>
</header>
<body>

<!-- Start Preloader -->

<section id="home-revolution-slider">
    <div class="hero">
        <div class="tp-banner-container">
            <div class="tp-banner">
                <video width=100% height=100% autoplay muted loop >
                    <source src="{{asset('Magica4.mp4')}}" type="video/mp4" ></video>
            </div>
        </div>
    </div>
</section>
<!-- End Home Revolution Slider Parallax Section -->
<div class="site-wrapper content">
    <!-- Start Features Section -->
    <section id="about">
        <div class="container">
            <div class="col-md-12 text-center wow fadeInUp">
                <h3 class="section-title">Auto Ecole ENSI</h3>
                <p class="subheading">l<span class="highlight"> creative team</span>, trying to enrich the lives of others</p>
            </div>
            <div class="row features-row wow fadeInUp">
                <div class="col-md-4 col-sm-12 feature-column">
                    <div class="feature-icon">
                        <i class="icon-eyeglasses size-2x highlight"></i>
                        <i class="icon-eyeglasses back-icon"></i>
                    </div>
                    <div class="feature-info">
                        <h4>Fondation</h4>
                        <p class="feature-description">Notre auto école est fondé en 2021 par des ingénieurs informatiques afin de faciliter au client les services d'auto-école (code et permis)</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 feature-column">
                    <div class="feature-icon">
                        <i class="icon-energy size-2x highlight"></i>
                        <i class="icon-energy back-icon"></i>
                    </div>
                    <div class="feature-info">
                        <h4>pédagogie</h4>
                        <p class="feature-description">notre stratégie de formation d'auto école est purement pédagogique et informatisée</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 feature-column">
                    <div class="feature-icon">
                        <i class="icon-lock-open size-2x highlight"></i>
                        <i class="icon-lock-open back-icon"></i>
                    </div>
                    <div class="feature-info">
                        <h4>Traçabilité et sécurité</h4>
                        <p class="feature-description">Notre platforme assure la traçabilité et la suivie des rendez vous plannifié avec le moniteur suivant votre disponibilité en assurant les délais et la qualité</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Features Section -->
    <!-- Start Fun Facts Section -->
    <section id="fun-facts" class="parallax-section-5">
        <div class="container">
            <div class="col-md-12 text-center white wow fadeInUp">
                <h3 class="section-title"> Nos avantages et statistiques </h3>
                <p class="subheading">Mariem ZARAI</p>
            </div>
            <div class="counter-row row text-center wow fadeInUp">
                <div class="col-md-3 col-sm-6 fact-container">
                    <div class="fact">
                        <span class="counter highlight">150</span>
                        <h4>nombre de véhicules</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 fact-container">
                    <div class="fact">
                        <span class="counter highlight">385</span>
                        <h4>Nombre de moniteur</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 fact-container">
                    <div class="fact">
                        <h2 class="counter highlight">1580</h2>
                        <h4>Permis obtenu</h4>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 fact-container">
                    <div class="fact">
                        <span class="counter highlight">250</span>
                        <h4>nombre de permis obtenu à la première fois</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="team">
        <div class="container">
            <div class="col-md-12 text-center wow fadeInUp">
                <h3 class="section-title">Notre team</h3>
                <p class="subheading">Équipe interdisciplinaire avec de grandes<span class="highlight"> idées </span>et des <span class="highlight">défis</span> .</p>
            </div>
            <div class="row test">
                <div class="col-md-3 col-sm-3 team-member">
                    <div class="effect effects wow fadeInUp">
                        <div class="img">
                            <img src="img/team/mourad.png" height="50%" class="img-responsive" alt="" />
                            <div class="overlay">
                                <ul class="expand">
                                    <li class="social-icon">
                                        <a href="#" onClick="return false;">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="social-icon">
                                        <a href="#" onClick="return false;">
                                            <i class="icon-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="social-icon">
                                        <a href="#" onClick="return false;">
                                            <i class=" icon-envelope-open"></i>
                                        </a>
                                    </li>
                                </ul>
                                <a class="close-overlay hidden">
                                    x
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="member-info wow fadeInUp">
                        <h4>Mourad Sellami</h4>
                        <h5 class="highlight">front-END</h5>
                        <p>Ingénieur en informatique et un formateur en graphique design</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 team-member">
                    <div class="effect effects wow fadeInUp">
                        <div class="img">
                            <img src="img/team/meriam.jpg" class="img-responsive" alt="" />
                            <div class="overlay">
                                <ul class="expand">
                                    <li class="social-icon">
                                        <a href="#" onClick="return false;">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="social-icon">
                                        <a href="#" onClick="return false;">
                                            <i class="icon-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="social-icon">
                                        <a href="#" onClick="return false;">
                                            <i class=" icon-envelope-open"></i>
                                        </a>
                                    </li>
                                </ul>
                                <a class="close-overlay hidden">
                                    x
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="member-info wow fadeInUp">
                        <h4>Mariem Zarai</h4>
                        <h5 class="highlight">fondatrice</h5>
                        <p>Ingénieur en informatique et coordinatrice du projet qui assurent la validation</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 team-member">
                    <div class="effect effects wow fadeInUp">
                        <div class="img">
                            <img src="{{asset('img/team/team-4.jpg')}}" class="img-responsive" alt="" />
                            <div class="overlay">
                                <ul class="expand">
                                    <li class="social-icon">
                                        <a href="#" onClick="return false;">
                                            <i class="icon-social-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="social-icon">
                                        <a href="#" onClick="return false;">
                                            <i class="icon-social-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="social-icon">
                                        <a href="#" onClick="return false;">
                                            <i class=" icon-envelope-open"></i>
                                        </a>
                                    </li>
                                </ul>
                                <a class="close-overlay hidden">
                                    x
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="member-info wow fadeInUp">
                        <h4>Yassine Mejri</h4>
                        <h5 class="highlight">Back-END</h5>
                        <p>Ingénieur en informatique spécialiste au création des bases de données et gestion de fichier</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="quote" class="parallax-section-6">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-lg-12 wow fadeInUp" style="z-index:3">
                    <div id="quote-slider" class="owl-carousel">
                        <div>
                            <blockquote>
                                <i class="icon-left ion-quote ion-2x highlight"></i>
                                <span>une croyance a le pouvoir construire, ou de détruire<br>
                        David Lefrançois </span>
                                <i class="icon-right ion-quote ion-2x highlight"></i>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="section-title wow fadeInUp">Nous Contacter</h3>
                    <p class="subheading wow fadeInUp"> votre apprentissage est notre priorité </p>
                </div>
                <div class="col-md-7 wow fadeInUp">
                    <div id="message"></div>
                    <form method="post" action="php/contact-form.php.htm" name="contactform" id="contactform">
                        <fieldset>
                            <input name="name" type="text" id="name" placeholder="Nom"/>
                            <input name="email" type="text" id="email" placeholder="Prénom"/>
                            <input name="subject" type="text" id="subject" placeholder="Sujet"/>
                        </fieldset>
                        <fieldset>
                            <textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message"></textarea>
                        </fieldset>
                        <input type="submit" class="submit" id="submit" value="Envoyer un message" />
                    </form>
                </div>
                <div class="col-md-5 wow fadeInLeft">
                    <h4> Tunisie : </h4>
                    <address>
                        16, Rue Khaled Ben walid<br>
                        Ariana,  Tunis , Tunisie<br>
                        <h4> Nous Contactez : </h4>
                        <address>
                            <abbr title="Phone">
                                <strong> Numéro </strong>
                            </abbr> : +216 58 805 207 <br>
                            <abbr title="Fax">
                                <strong>Fax </strong>
                            </abbr> : +216 71 335 210 <br>
                            <abbr title="Email">
                                <strong>Email </strong>
                            </abbr>: autoecole@gmail.com <br>
                        </address>
                    </address>
                </div>
            </div>
        </div>
    </section>
    <div id="map"></div>
    <footer id="footer">
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center"><br><br><br>
                        <ul class="social-icons subheading">
                            <li>
                                <a href="#">
                                    <i class="icon ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon ion-social-googleplus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon ion-social-instagram-outline"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon ion-social-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon ion-social-skype"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon ion-social-dropbox"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon ion-social-vimeo"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon ion-social-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Copyright -->

    </footer>
    <a id="back-to-top">
        <i class="icon ion-chevron-up"></i>
    </a>
    <!-- End Back To Top -->

</div>
<!-- End Site Wrapper -->
<!-- jQuery -->
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
<script type="text/javascript" src="{{ asset('js-front-page/scripts.js' ) }}"></script>
</body>
</html>

