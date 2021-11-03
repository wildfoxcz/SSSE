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
    <header class="section rd-navbar-absolute-wrap" data-preset='{"title":"Navbar Default","category":"header","reload":true,"id":"navbar-default"}'>
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
                                <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="team-member.html">Team member</a>
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
    <!-- Swiper default-->
    <section class="swiper-container swiper-1 context-dark text-center" data-swiper='{"autoplay":false}'>
        <!-- Additional required wrapper-->
        <div class="swiper-wrapper">
            <!-- Slides-->
            @foreach ($posts as $post)
                <div class="swiper-slide section-md" style="background-image: url(images/posts/{{ $post->image }})">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-9 col-lg-7">
                                <h1>{{ $post->title }}</h1>
                                <p class="big">{!! $post->description !!}</p><a class="btn btn-primary" href="academics.html">Číst více</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- Pagination-->
        <div class="swiper-pagination"></div>
    </section>
    <!-- Blurb default-->
    <section class="section-md bg-transparent text-center">
        <div class="container">
            <div class="row row-30 justify-content-center">
                <div class="col-sm-6 col-md-4">
                    <!-- Blurb-->
                    <article class="blurb blurb-2" data-animate='{"class":"fadeInUp"}'>
                        <div class="icon blurb-icon custom-font-online-course"></div>
                        <div class="blurb-title h4">Proč u nás studovat</div>
                        <div class="blurb-text big">Teachzy provides online education services with all learning materials and lectures available to you.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4">
                    <!-- Blurb-->
                    <article class="blurb blurb-2" data-animate='{"class":"fadeInUp","delay":".15s"}'>
                        <div class="icon blurb-icon custom-font-degree"></div>
                        <div class="blurb-title h4">Naše obory</div>
                        <div class="blurb-text big">We offer a wide range of courses and  programs that encompass lots of knowledge spheres.</div>
                    </article>
                </div>
                <div class="col-sm-6 col-md-4">
                    <!-- Blurb-->
                    <article class="blurb blurb-2" data-animate='{"class":"fadeInUp","delay":".3s"}'>
                        <div class="icon blurb-icon custom-font-school"></div>
                        <div class="blurb-title h4">Den otevřených dveří</div>
                        <div class="blurb-text big">Our campus is the hub to a talented and diverse student community that turns opportunities into success.</div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Price box-->
    <section class="section-md bg-300 text-center">
        <div class="container">
            <div class="text-block text-block-1" data-animate='{"class":"fadeIn"}'>
                <h2>Vyber si obor pro tebe</h2>
                <p class="big">Our featured courses are selected through a rigorous process and uniquely created for each semester. They cover a lot of topics and are available both online and offline.</p>
            </div>
            <div class="owl-carousel owl-content-1" data-owl="{&quot;dots&quot;:true}" data-loop="false" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4">
                <!-- Price box-->
                <div class="price-box">
                    <div class="price-box-media"><img class="price-box-img" src="images/image-01-270x220.jpg" alt="" width="270" height="220"/>
                        <div class="price-box-tag">$20</div>
                    </div>
                    <div class="price-box-body">
                        <div class="price-box-title h6"><a href="#">Academic English</a></div>
                        <div class="price-box-text">Steven Carter</div>
                    </div>
                </div>
                <!-- Price box-->
                <div class="price-box">
                    <div class="price-box-media"><img class="price-box-img" src="images/image-02-270x220.jpg" alt="" width="270" height="220"/>
                        <div class="price-box-tag">$40</div>
                    </div>
                    <div class="price-box-body">
                        <div class="price-box-title h6"><a href="#">Online Marketing</a></div>
                        <div class="price-box-text">Ronald Richards</div>
                    </div>
                </div>
                <!-- Price box-->
                <div class="price-box">
                    <div class="price-box-media"><img class="price-box-img" src="images/image-03-270x220.jpg" alt="" width="270" height="220"/>
                        <div class="price-box-tag">$30</div>
                    </div>
                    <div class="price-box-body">
                        <div class="price-box-title h6"><a href="#">HR Management</a></div>
                        <div class="price-box-text">Ralph Edwards</div>
                    </div>
                </div>
                <!-- Price box-->
                <div class="price-box">
                    <div class="price-box-media"><img class="price-box-img" src="images/image-04-270x220.jpg" alt="" width="270" height="220"/>
                        <div class="price-box-tag">$30</div>
                    </div>
                    <div class="price-box-body">
                        <div class="price-box-title h6"><a href="#">Financial Analytics</a></div>
                        <div class="price-box-text">Emma Smith</div>
                    </div>
                </div>
                <!-- Price box-->
                <div class="price-box">
                    <div class="price-box-media"><img class="price-box-img" src="images/image-18-270x220.jpg" alt="" width="270" height="220"/>
                        <div class="price-box-tag">$30</div>
                    </div>
                    <div class="price-box-body">
                        <div class="price-box-title h6"><a href="#">Web Technology</a></div>
                        <div class="price-box-text">Kathryn Murphy</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counters-->
    <section class="section-lg bg-primary bg-image-wrap context-dark text-center text-md-start">
        <div class="bg-image-wrap-item bg-image" style="background-image:url(images/image-05-875x705.jpg);"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="pe-xxl-5">
                        <h2>Co ti nabídneme?</h2>
                        <p class="big">Teachzy offers quality education helping you build your future career. Here just some of the facts that show why students choose us.</p>
                        <div class="row row-30 row-lg-55">
                            <div class="col-6 col-sm-3 col-md-6">
                                <!-- Blurb side-->
                                <article class="blurb blurb-side">
                                    <div class="blurb-item">
                                        <div class="icon blurb-icon custom-font-graduated"></div>
                                    </div>
                                    <div class="blurb-body">
                                        <div class="blurb-counter-value h2"><span data-counter="">97</span><span class="counter-postfix">%</span>
                                        </div>
                                        <div class="blurb-title h4">Graduates</div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-6 col-sm-3 col-md-6">
                                <!-- Blurb side-->
                                <article class="blurb blurb-side">
                                    <div class="blurb-item">
                                        <div class="icon blurb-icon custom-font-male-teacher"></div>
                                    </div>
                                    <div class="blurb-body">
                                        <div class="blurb-counter-value h2"><span data-counter="">50</span><span class="counter-postfix">+</span>
                                        </div>
                                        <div class="blurb-title h4">Certified tutors</div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-6 col-sm-3 col-md-6">
                                <!-- Blurb side-->
                                <article class="blurb blurb-side">
                                    <div class="blurb-item">
                                        <div class="icon blurb-icon custom-font-student-at-desk"></div>
                                    </div>
                                    <div class="blurb-body">
                                        <div class="blurb-counter-value h2"><span data-counter="">6500</span>
                                        </div>
                                        <div class="blurb-title h4">Students</div>
                                    </div>
                                </article>
                            </div>
                            <div class="col-6 col-sm-3 col-md-6">
                                <!-- Blurb side-->
                                <article class="blurb blurb-side">
                                    <div class="blurb-item">
                                        <div class="icon blurb-icon custom-font-university"></div>
                                    </div>
                                    <div class="blurb-body">
                                        <div class="blurb-counter-value h2"><span data-counter="">10</span>
                                        </div>
                                        <div class="blurb-title h4">Campuses</div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials-->
    <section class="section-md bg-300 text-center">
        <div class="container">
            <div class="text-block text-block-1" data-animate='{"class":"fadeIn"}'>
                <h2>Co o nás říkají?</h2>
                <p class="big">Want to know more about our university? The feedback submitted by our students is an effective way to show how beneficial the studying at Teachzy university can be.</p>
            </div>
            <div class="slick-person-container">
                <div class="slick-slider slick-person-img slider-nav" data-slick='{"slidesToShow":3,"arrows":false,"asNavFor":".slider-for","focusOnSelect":true,"centerMode":true,"centerPadding":"0px"}'>
                    <div class="slick-content"><img src="images/person-11-135x135.jpg" alt="" width="135" height="135"/>
                    </div>
                    <div class="slick-content"><img src="images/person-07-135x135.jpg" alt="" width="135" height="135"/>
                    </div>
                    <div class="slick-content"><img src="images/person-10-135x135.jpg" alt="" width="135" height="135"/>
                    </div>
                    <div class="slick-content"><img src="images/person-08-135x135.jpg" alt="" width="135" height="135"/>
                    </div>
                </div>
                <div class="slick-slider slick-person-content slider-for" data-slick='{"arrows":true,"asNavFor":".slider-nav","autoplay":true,"autoplaySpeed":5000,"fade":true}'>
                    <div class="slick-content">
                        <!-- Quote-->
                        <blockquote class="quote quote-simple">
                            <q class="quote-text">My overall experience in Teachzy was amazing. The best part is to get to know people from a lot of different places, learn about different cultures and make friends for life!</q>
                            <cite class="quote-cite h6">Peter Fletcher</cite>
                            <div class="quote-meta">Student</div>
                        </blockquote>
                    </div>
                    <div class="slick-content">
                        <!-- Quote-->
                        <blockquote class="quote quote-simple">
                            <q class="quote-text">This university was an exceptional and international experience for me. It did not only advance my studies and knowledge but even gave me the chance to make friends across the globe.</q>
                            <cite class="quote-cite h6">Jenny Wilson</cite>
                            <div class="quote-meta">Student</div>
                        </blockquote>
                    </div>
                    <div class="slick-content">
                        <!-- Quote-->
                        <blockquote class="quote quote-simple">
                            <q class="quote-text">I made friends from countries all over the world. That’s really amazing! And Teachzy is just like a quiet oasis in the crowded city, it’s really pleasant to study and live here.</q>
                            <cite class="quote-cite h6">John Adams</cite>
                            <div class="quote-meta">Student</div>
                        </blockquote>
                    </div>
                    <div class="slick-content">
                        <!-- Quote-->
                        <blockquote class="quote quote-simple">
                            <q class="quote-text">I've been working at Teachzy for over 20 years. As a tutor I love interacting with students and share my knowledge. Here you can definitely make connections for life!</q>
                            <cite class="quote-cite h6">Esther Howard</cite>
                            <div class="quote-meta">Professor</div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Person side-->
    <section class="section-md bg-transparent text-center">
        <div class="container">
            <div class="row row-30 row-lg-60">
                <div class="col-xs-6 col-lg-4">
                    <!-- Person side-->
                    <div class="person person-side" data-animate='{"class":"fadeInUp"}'>
                        <div class="person-media"><img class="person-img" src="images/person-01-135x135.jpg" alt="" width="135" height="135"/>
                        </div>
                        <div class="person-body">
                            <div class="person-title h6"><a href="team-member.html">Leslie Alexander</a></div>
                            <div class="person-meta">Tutor</div>
                            <div class="person-text">Leslie joined our team in 2010 as a marketing tutor.</div>
                            <div class="person-social social"><a class="icon social-icon custom-font-facebook" href="#"></a><a class="icon social-icon custom-font-twitter" href="#"></a><a class="icon social-icon custom-font-linkedin" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-4">
                    <!-- Person side-->
                    <div class="person person-side" data-animate='{"class":"fadeInUp","delay":".15s"}'>
                        <div class="person-media"><img class="person-img" src="images/person-02-135x135.jpg" alt="" width="135" height="135"/>
                        </div>
                        <div class="person-body">
                            <div class="person-title h6"><a href="team-member.html">Cameron Williamson</a></div>
                            <div class="person-meta">Course assistant</div>
                            <div class="person-text">Cameron helps Teachzy team with online programs.</div>
                            <div class="person-social social"><a class="icon social-icon custom-font-facebook" href="#"></a><a class="icon social-icon custom-font-twitter" href="#"></a><a class="icon social-icon custom-font-linkedin" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-4">
                    <!-- Person side-->
                    <div class="person person-side" data-animate='{"class":"fadeInUp","delay":".3s"}'>
                        <div class="person-media"><img class="person-img" src="images/person-03-135x135.jpg" alt="" width="135" height="135"/>
                        </div>
                        <div class="person-body">
                            <div class="person-title h6"><a href="team-member.html">Theresa Webb</a></div>
                            <div class="person-meta">Lead tutor</div>
                            <div class="person-text">Theresa is one of our best foreign language tutors.</div>
                            <div class="person-social social"><a class="icon social-icon custom-font-facebook" href="#"></a><a class="icon social-icon custom-font-twitter" href="#"></a><a class="icon social-icon custom-font-linkedin" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-4">
                    <!-- Person side-->
                    <div class="person person-side" data-animate='{"class":"fadeInUp"}'>
                        <div class="person-media"><img class="person-img" src="images/person-04-135x135.jpg" alt="" width="135" height="135"/>
                        </div>
                        <div class="person-body">
                            <div class="person-title h6"><a href="team-member.html">Jacob Jones</a></div>
                            <div class="person-meta">Program coordinator</div>
                            <div class="person-text">Jacob coordinates most of our programs &amp; courses.</div>
                            <div class="person-social social"><a class="icon social-icon custom-font-facebook" href="#"></a><a class="icon social-icon custom-font-twitter" href="#"></a><a class="icon social-icon custom-font-linkedin" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-4">
                    <!-- Person side-->
                    <div class="person person-side" data-animate='{"class":"fadeInUp","delay":".15s"}'>
                        <div class="person-media"><img class="person-img" src="images/person-05-135x135.jpg" alt="" width="135" height="135"/>
                        </div>
                        <div class="person-body">
                            <div class="person-title h6"><a href="team-member.html">Brooklyn Simmons</a></div>
                            <div class="person-meta">Professor</div>
                            <div class="person-text">Brooklyn is our leading management tutor.</div>
                            <div class="person-social social"><a class="icon social-icon custom-font-facebook" href="#"></a><a class="icon social-icon custom-font-twitter" href="#"></a><a class="icon social-icon custom-font-linkedin" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-lg-4">
                    <!-- Person side-->
                    <div class="person person-side" data-animate='{"class":"fadeInUp","delay":".3s"}'>
                        <div class="person-media"><img class="person-img" src="images/person-06-135x135.jpg" alt="" width="135" height="135"/>
                        </div>
                        <div class="person-body">
                            <div class="person-title h6"><a href="team-member.html">Wade Warren</a></div>
                            <div class="person-meta">Tutor</div>
                            <div class="person-text">Wade is an author of Web Tehcnology programs.</div>
                            <div class="person-social social"><a class="icon social-icon custom-font-facebook" href="#"></a><a class="icon social-icon custom-font-twitter" href="#"></a><a class="icon social-icon custom-font-linkedin" href="#"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action-->
    <section class="section-sm bg-primary context-dark text-center">
        <div class="container">
            <div class="group-16 d-lg-flex flex-wrap justify-content-between align-items-center">
                <h3>Chceš být jedním z nás?</h3><a class="btn btn-primary" href="#">Klikni sem!</a>
            </div>
        </div>
    </section>
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
                            <li class="list-item"><a class="link link-inherit" href="team-member.html">Olivia Thomas</a></li>
                            <li class="list-item"><a class="link link-inherit" href="team-member.html">Alice Bohm</a></li>
                            <li class="list-item"><a class="link link-inherit" href="team-member.html">Max Turner</a></li>
                            <li class="list-item"><a class="link link-inherit" href="team-member.html">Jane Smith</a></li>
                            <li class="list-item"><a class="link link-inherit" href="team-member.html">John Stevens</a></li>
                            <li class="list-item"><a class="link link-inherit" href="team-member.html">Martha Stevens</a></li>
                            <li class="list-item"><a class="link link-inherit" href="team-member.html">Connor Walker</a></li>
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
@guest
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
    @endif
@else
    @if(auth()->user()->isAuthorised('admin'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.home') }}">Administrace</a>
        </li>
    @endif

    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
@endguest

@yield('content')

