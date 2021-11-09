<!DOCTYPE html>
<html lang="cs">
<head>
    <title>SŠSE Brno</title>
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
        <div style="color: #ffffff; padding: 10px 10px 10px 400px; background-color: #051d64">rozvrh | jídelníček | edookit | instagram | facebook</div>
        <nav class="rd-navbar" data-rd-navbar='{"responsive":{"1200":{"stickUpOffset":"50px"}}}'>
            <div class="navbar-container">
                <div class="navbar-cell">
                    <div class="navbar-panel">
                        <button class="navbar-switch novi-icon custom-font-menu" data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","isolate":"[data-multi-switch]"}'></button>
                        <div class="navbar-logo"><a class="navbar-logo-link" href="{{ url('/') }}"><img class="navbar-logo-inverse" src="{{ url('images/logo-inverse-396x100.png') }}" alt="Teachzy" width="198" height="50"/></a></div>
                    </div>
                </div>
                <div class="navbar-spacer"></div>
                <div class="navbar-cell navbar-sidebar">
                    <ul class="navbar-navigation rd-navbar-nav">
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="#">UCHAZEČI</a>
                            <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                <li class="navbar-navigation-back">
                                    <button class="navbar-navigation-back-btn">Zpět</button>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Proč u nás studovat?</a></li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Naše obory</a></li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Příjmací řízení</a></li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Ubytování a stravování</a></li>
                            </ul>
                        </li>
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="#">STUDENTI</a>
                            <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                <li class="navbar-navigation-back">
                                    <button class="navbar-navigation-back-btn">Zpět</button>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="https://sssebrno-login.edookit.net/">Edookit</a></li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{ url('stranky/studijni-oddeleni') }}">Studijní oddělení</a></li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{ url('stranky/konzultacni-hodiny-ucitelu') }}">Konzultační hodiny</a></li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="{{ url('stranky/skolni-rad') }}">Organizace školního roku</a></li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Studijní materiály</a></li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Ubytování a stravování</a></li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Poradenské pracoviště</a></li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Školní projekty</a></li>
                            </ul>
                        </li>
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="#">O ŠKOLE</a>
                            <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                <li class="navbar-navigation-back">
                                    <button class="navbar-navigation-back-btn">Zpět</button>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Historie a současnost</a>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Školská rada</a>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Fotogalerie</a>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Svářečská škola</a>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Vzdělávaní dospělých</a>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Ubytovna - hotel</a>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Projekty</a>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Pronájmy</a>
                                </li>
                            </ul>
                        </li>
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="{{ route('posts.index') }}">AKTUÁLNĚ</a>
                            <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                <li class="navbar-navigation-back">
                                    <button class="navbar-navigation-back-btn">Zpět</button>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Novinky</a>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Úřední deska</a>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Volná místa</a>
                                </li>
                            </ul>
                        </li>
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="#">MATURITY A ZKOUŠKY</a>
                            <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                                <li class="navbar-navigation-back">
                                    <button class="navbar-navigation-back-btn">Zpět</button>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Maturnitní zkoušky</a>
                                </li>
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Závěrečné zkoušky</a>
                                </li>
                            </ul>
                        </li>
                        <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="#">KONTAKT</a>
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
                                <div class="list-icon custom-font-pin"></div><a class="link link-inherit" href="#">Trnkova 2482/113, 628 00 Brno-Líšeň</a>
                            </li>
                            <li class="list-item">
                                <div class="list-icon custom-font-email"></div><a class="link link-inherit" href="mailto:#">sekretariat@sssebrno.cz</a>
                            </li>
                            <li class="list-item">
                                <div class="list-icon custom-font-phone"></div><span><a class="link link-inherit" href="tel:#">+420 544 422 811</a></span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3">
                        <h5 class="footer-title">Pro uchazeče</h5>
                        <ul class="list list-sm">
                            <li class="list-item"><a class="link link-inherit" href="#">Proč u nás studovat?</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Naše obory</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Přijmací řízení</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Ubytování a stravování</a></li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3">
                        <h5 class="footer-title">Studenti</h5>
                        <ul class="list list-sm">
                            <li class="list-item"><a class="link link-inherit" href="https://sssebrno-login.edookit.net/">Edookit</a></li>
                            <li class="list-item"><a class="link link-inherit" href="{{ url('stranky/studijni-oddeleni') }}">Studijní oddělení</a></li>
                            <li class="list-item"><a class="link link-inherit" href="{{ url('stranky/konzultacni-hodiny-ucitelu') }}">Konzultační hodiny</a></li>
                            <li class="list-item"><a class="link link-inherit" href="{{ url('stranky/skolni-rad') }}">Organizace školního roku</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Studijní materiály</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Ubytování a stravování</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Poradenské pracoviště</a></li>
                            <li class="list-item"><a class="link link-inherit" href="#">Školní projekty</a></li>
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
                <p class="rights"><span>&copy; 2021&nbsp;</span><span>SŠSE Brno</span><span> - Všechna práva vyhrazená.&nbsp;</span></p>
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
