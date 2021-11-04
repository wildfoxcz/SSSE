@extends('layouts.web')

@section('content')
    <!-- About us-->
    <section class="section-md bg-300 bg-layer text-center">
        <div class="bg-layer-item bg-white" style="bottom: 30%"></div>
        <div class="container">
            <div class="text-block text-block-1">
                <h2>{{ $field->name }}</h2>
                {!! $field->description !!}
            </div>
            <div class="row g-0">
                <div class="col-4"><img src="{{ $field->image_1 }}" alt="" width="390" height="390"/>
                </div>
                <div class="col-4"><img src="{{ $field->image_2 }}" alt="" width="390" height="390"/>
                </div>
                <div class="col-4"><img src="{{ $field->image_3 }}" alt="" width="390" height="390"/>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action-->
    <section class="section-md bg-300 text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-xxl-9">
                    <h2>Proč studovat tento obor?</h2>
                    <p class="big">
                        {!! $field->reasons !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- About us-->
    <section class="section-md bg-transparent text-center text-md-start">
        <div class="container">
            <div class="row">
                <div class="col-md-6 bg-primary context-dark spacing-box" >
                    <h4>Základní informace</h4>
                    <p class="big">
                        {!! $field->basic_info !!}
                    </p>
                </div>
                <div align="center" class="col-md-6 bg-primary context-dark spacing-box"  style="padding-top: 230px;">
                    <a class="btn btn-outline" href="{{ $field->join_url }}">Přihláška ke studiu (PDF)</a><br>
                    <a class="btn btn-outline" href="{{ $field->about_url }}">Informace o příjmacím řízení</a><br>
                    <a class="btn btn-outline" href="{{ $field->vsp }}">Školní vzdělávací Program</a>
                </div>
                <div class="col-md-6 bg-secondary context-dark spacing-box" >
                    <h2>Co budu umět?</h2>
                    <p class="big">
                        {!! $field->what_can !!}
                    </p>
                </div>
                <div class="col-md-6 bg-third context-dark spacing-box" style="padding-top: 48px">
                    <h2 id="kde">Kde se uplatním?</h2>
                    <p class="big">
                        {!! $field->where_can !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action-->
    <section class="section-md bg-300 text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-xxl-9">
                    <h2>Učební plán</h2>
                    <p class="big">
                        Zde přijde tabulka
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog-->
    <section class="section-md  text-center">
        <div class="container">
            <div class="text-block" data-animate='{"class":"fadeIn"}'>
            <h2>Partneři</h2>
            <p class="big">Spolupracujeme s těmi nejlepšími</p>
        </div>
        <div class="owl-carousel owl-content-1" data-owl="{&quot;dots&quot;:true}" data-loop="false" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4">
            <!-- Price box-->
            <div class="price-box">
                <div class="price-box-media"><img class="price-box-img" src="images/image-01-270x220.jpg" alt="" width="270" height="220"/>
                </div>
            </div>
            <!-- Price box-->
            <div class="price-box">
                <div class="price-box-media"><img class="price-box-img" src="images/image-02-270x220.jpg" alt="" width="270" height="220"/>
                </div>
            </div>
            <!-- Price box-->
            <div class="price-box">
                <div class="price-box-media"><img class="price-box-img" src="images/image-03-270x220.jpg" alt="" width="270" height="220"/>
                </div>
            </div>
            <!-- Price box-->
            <div class="price-box">
                <div class="price-box-media"><img class="price-box-img" src="images/image-04-270x220.jpg" alt="" width="270" height="220"/>
                </div>
            </div>
            <!-- Price box-->
            <div class="price-box">
                <div class="price-box-media"><img class="price-box-img" src="images/image-18-270x220.jpg" alt="" width="270" height="220"/>
                </div>
            </div>
        </div>
    </section>
@endsection
