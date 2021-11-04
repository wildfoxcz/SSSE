<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Template Monster Admin Template">
    <meta property="og:description" content="brevis, barbatus clabulares aliquando convertam de dexter, peritus capio. devatio clemens habitio est.">
    <meta property="og:image" content="http://digipunk.netii.net/images/radar.gif">
    <meta property="og:url" content="http://digipunk.netii.net">
    <link rel="icon" href="{{ url('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('components/base/base.css') }}">
    <script src="{{ url('components/base/core.min.js') }}"></script>
    <script src="{{ url('components/base/script.js') }}"></script>
</head>
<body>
<div class="page">
    <!--RD Navbar-->
    <header class="section rd-navbar{{($hiddenNav ?? false) ? '-absolute' : ''}}-wrap" data-preset='{"title":"Navbar Default","category":"header","reload":true,"id":"navbar-default"}'>
        <nav class="rd-navbar" data-rd-navbar='{"responsive":{"1200":{"stickUpOffset":"50px"}}}'>
            <div class="navbar-container">
                <div class="navbar-cell">
                    <div class="navbar-panel">
                        <button class="navbar-switch novi-icon custom-font-menu" data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","isolate":"[data-multi-switch]"}'></button>
                        <div class="navbar-logo"><a class="navbar-logo-link" href="index.html"><img class="navbar-logo-inverse" src="images/logo-inverse-396x100.png" alt="Teachzy" width="198" height="50"/></a></div>
                    </div>
                </div>
                <div class="navbar-spacer"></div>
                <div class="navbar-cell navbar-sidebar">
                    <ul class="navbar-navigation rd-navbar-nav">
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="tutors.html">UCHAZEČI</a>
                            <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                <li class="navbar-navigation-back">
                                    <button class="navbar-navigation-back-btn">Back</button>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="team-member.html">Team member</a>
                                </li>
                            </ul>
                        </li>
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="tutors.html">STUDENTI</a>
                            <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                <li class="navbar-navigation-back">
                                    <button class="navbar-navigation-back-btn">Back</button>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="team-member.html">Team member</a>
                                </li>
                            </ul>
                        </li>
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="tutors.html">O ŠKOLE</a>
                            <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                <li class="navbar-navigation-back">
                                    <button class="navbar-navigation-back-btn">Back</button>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="team-member.html">Historie a současnost</a>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="team-member.html">Školská rada</a>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="team-member.html">Fotogalerie</a>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="team-member.html">Svářečská škola</a>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="team-member.html">Vzdělávaní dospělých</a>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="team-member.html">Ubytovna - hotel</a>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="team-member.html">Projekty</a>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="team-member.html">Projekty</a>
                                </li>
                            </ul>
                        </li>
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="blog.html">AKTUALITY</a>
                            <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                <li class="navbar-navigation-back">
                                    <button class="navbar-navigation-back-btn">Back</button>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="single-post.html">Single post</a>
                                </li>
                            </ul>
                        </li>
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="#">MATURITY A ZKOUŠKY</a>
                            <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                <li class="navbar-navigation-back">
                                    <button class="navbar-navigation-back-btn">Back</button>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="gallery.html">Gallery</a>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="404.html">404</a>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="coming-soon.html">Coming soon</a>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="privacy-policy.html">Privacy policy</a>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="search-results.html">Search results</a>
                                </li>
                            </ul>
                        </li>
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="contact-us.html">KONTAKT</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar-spacer"></div>
            </div>
        </nav>
    </header>
    @yield('content')
    <!-- Footer default-->
    <footer class="section footer">
        <div class="footer-top bg-300">
            <div class="container">
                <div class="row row-30">
                    <div class="col-xs-6 col-md-3">
                        <h5 class="footer-title">Kontakt</h5>
                        <ul class="list list-icons">
                            <li class="list-item">
                                <div class="list-icon custom-font-pin"></div><a class="link link-inherit" href="#">Brooklyn, NY 10036, 16-2 United States</a>
                            </li>
                            <li class="list-item">
                                <div class="list-icon custom-font-email"></div><a class="link link-inherit" href="mailto:#">info@demolink.org</a>
                            </li>
                            <li class="list-item">
                                <div class="list-icon custom-font-phone"></div><span><span>Call Us: </span><a class="link link-inherit" href="tel:#">1-800-123-1234</a></span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3">
                        <h5 class="footer-title">Pro uchazeče</h5>
                        <ul class="list list-sm">
                            <li class="list-item"><a class="link link-inherit" href="#">Facebook</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Pinterest</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">LinkedIn</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Instagram</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Twitter</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">YouTube</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3">
                        <h5 class="footer-title">Pro studenty</h5>
                        <ul class="list list-sm">
                            <li class="list-item"><a class="link link-inherit" href="#">Our Mission</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Graduate Admission</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Our Vision</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Our Values</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">About Us</a></li>
                            <li class="list-item"><a class="link link-inherit" href="academics.html">Academics</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Degree Programs</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3">
                        <h5 class="footer-title">O škole</h5>
                        <ul class="list list-sm">
                            <li class="list-item"><a class="link link-inherit" href="#">Historie a současnost</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Školská rada</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Fotogalerie</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Svářečská škola</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Vzdělávání dospělých</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Ubytovna - hotel</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Projekty</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Dokumenty</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-700 context-dark text-center">
            <div class="container">
                <!-- Copyright-->
                <p class="rights"><span>&copy; 2021&nbsp;</span><span>Teachzy</span><span>. All rights reserved.&nbsp;</span><a class="link link-inherit" href="privacy-policy.html">Privacy Policy</a></p>
            </div>
        </div>
    </footer>
</div>
<!-- Preloader-->
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-dot"></div>
        <div class="preloader-dot"></div>
        <div class="preloader-dot"></div>
        <div class="preloader-dot"></div>
    </div>
</div>
</body>
</html>
