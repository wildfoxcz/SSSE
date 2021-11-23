@extends('layouts.web')

@section('content')
    <section class="section-md bg-transparent text-center">
        <div class="container">
            <h5 class="text-primary">Our university’s best moments</h5>
            <h2>Our gallery</h2>
            <div class="row g-0 justify-content-center" data-lightgallery="">
                @foreach($galleryImages as $image)
                    <div class="col-6 col-xs-5 col-md-4">
                        <!-- Thumbnail gallery-->
                        <div class="thumbnail thumbnail-gallery">
                            <a class="thumbnail-media lightgallery-item" href="{{url('/images/gallery_images/'.$image->image)}}">
                                <img class="thumbnail-img" src="{{url('/images/gallery_images/'.$image->thumbnail)}}" alt="" width="390" height="390">
                                <div class="thumbnail-media-caption">
                                    <div class="thumbnail-media-icon custom-font-maximize"></div>
                                </div>
                            </a></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
