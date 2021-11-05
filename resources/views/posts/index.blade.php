@extends('layouts.web')

@section('content')
    <section class="section breadcrumb-section">
        <div class="container">
            <!-- Blog-->
            <section class="section-md bg-transparent">
                <div class="container">
                    <div class="row row-30 justify-content-center">
                        <div class="col-md-6 col-lg-12">
                            <h3>Aktuality</h3>
                            @foreach($posts as $post)
                            <!-- Post-->
                            <div class="post post-offset">
                                <a class="post-media" href="{{ route('posts.show', $post) }}">
                                    <img class="post-img" src="{{ url('images/posts/'.$post->image) }}" alt="" width="769" height="380"/>
                                </a>
                                <div class="post-meta">
                                    <div class="post-meta-item">
                                        <div class="post-meta-icon custom-font-calendar"></div>
                                        <div class="post-date">{{ $post->created_at }}</div>
                                    </div>
                                    <div class="post-meta-item">
                                    </div>
                                </div>
                                <div class="post-title h6"><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></div>
                                <div class="post-text">{{$post->short_description}}</div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
        </div>
    </section>
@endsection
