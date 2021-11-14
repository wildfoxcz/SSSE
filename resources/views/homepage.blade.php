@extends('layouts.web', ['hiddenNav' => true])

@section('content')
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
                            <p class="big">{!! $post->short_desc !!}</p><a class="btn btn-primary" href="{{ url('aktuality') }}/{{ $post->slug }}">Číst více</a>
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
                    <div class="blurb-text big">Hledáš obory díky kterým budeš mít budoucnost vždycky zajištěnou? Objev školu, která tě do života vybaví tolik potřebnou praxí. Navíc můžeš ušetřit na certifikacích.
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-md-4">
                <!-- Blurb-->
                <article class="blurb blurb-2" data-animate='{"class":"fadeInUp","delay":".15s"}'>
                    <div class="icon blurb-icon custom-font-degree"></div>
                    <div class="blurb-title h4">Naše obory</div>
                    <div class="blurb-text big">Ať už máš šikovné ruce nebo hlavu, máme pro tebe 9 bezvadných oborů. Z toho už se dá vybrat!</div>
                </article>
            </div>
            <div class="col-sm-6 col-md-4">
                <!-- Blurb-->
                <article class="blurb blurb-2" data-animate='{"class":"fadeInUp","delay":".3s"}'>
                    <div class="icon blurb-icon custom-font-school"></div>
                    <div class="blurb-title h4">Den otevřených dveří</div>
                    <div class="blurb-text big">Víš, že první zámečníci byli vlastně kováři, kteří vytvářeli z kovu brnění nebo podkovy? A že existuje živočišná elektřina? Víme, že slovo elektron je ze staré řečtiny a rytířskou helmu umíme vyrobit i my, tak se na nás přijď podívat</div>
                </article>
            </div>
        </div>
    </div>
</section>
<!-- Price box-->
<section class="section-md bg-300 text-center">
    <div class="container">
        <div class="text-block text-block-1" data-animate='{"class":"fadeIn"}'>
            <h2>Vyber si svůj obor</h2>
            <p class="big">Můžeš být elektrikářem až po ajťáka, nebo nástrojařem až po programátora CNC. <br>Vyber si, kam tě srdce táhne.</p>
        </div>
        <div class="owl-carousel owl-content-1" data-owl="{&quot;dots&quot;:true}" data-loop="false" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4">
            @foreach($fields as $field)
                <!-- Price box-->
                <div class="price-box">
                    <div class="price-box-media"><img class="price-box-img" src="{{ url('images/fields/'.$field->image_1) }}" alt="" width="270" height="220"/>
                    </div>
                    <div class="price-box-body">
                        <div class="price-box-title h6"><a href="{{ route('fields.show', $field) }}">{{ $field->name }}</a></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Counters-->
<section class="section-lg bg-primary bg-image-wrap context-dark text-center text-md-start">
    <div class="bg-image-wrap-item bg-image" style="background-image:url(images/skola-00-875x705.jpg);"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="pe-xxl-5">
                    <h2>Naše škola v číslech</h2>

                    <div class="row row-30 row-lg-55">
                        <div class="col-6 col-sm-3 col-md-6">
                            <!-- Blurb side-->
                            <article class="blurb blurb-side">
                                <div class="blurb-item">
                                    <div class="icon blurb-icon custom-font-graduated"></div>
                                </div>
                                <div class="blurb-body">
                                    <div class="blurb-counter-value h2"><span data-counter="">550</span>
                                    </div>
                                    <div class="blurb-title h4">studentů</div>
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
                                    <div class="blurb-counter-value h2"><span data-counter="">79</span><span class="counter-postfix">%</span>
                                    </div>
                                    <div class="blurb-title h4">úspěšnost u zkoušek</div>
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
                                    <div class="blurb-counter-value h2"><span data-counter="">20</span>
                                    </div>
                                    <div class="blurb-title h4">studentů na třídu</div>
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
                                    <div class="blurb-counter-value h2"><span data-counter="">9</span>
                                    </div>
                                    <div class="blurb-title h4">oborů</div>
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
                <h6>Sledujte nás na Instagramu</h6><br>
                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                <div class="elfsight-app-a143b35e-3297-485f-a5fb-9e33506bcc52"></div>
            </div>
            <div class="col-xs-6 col-lg-4">
                <!-- Person side-->
                <h6>Sledujte nás na Facebooku</h6><br>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsssebrno&tabs=timeline&width=370&height=390&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=349918385790465" width="350" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
            <div class="col-xs-6 col-lg-4">
                <!-- Person side-->
                <h6>Sledujte nás na YouTube</h6><br>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/EYcnUCEqxYA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
@endsection
