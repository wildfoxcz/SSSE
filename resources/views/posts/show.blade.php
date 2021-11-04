@extends('layouts.web')

@section('content')
    <!-- Post single-->
    <section class="section-md bg-transparent">
        <div class="container">
            <div class="post">
                <div class="post-media"><img class="post-img" src="{{ url('images/posts/'.$post->image) }}" alt="" width="1170" height="500"/>
                </div>
                <div class="post-meta">
                    <div class="post-meta-item">
                        <div class="post-meta-icon custom-font-calendar"></div>
                        <div class="post-date">23.04.2021 17:06</div>
                    </div>
                </div>
                <div class="post-title h4">{{ $post->title }}</div>
                <div class="post-text">
                    {!! $post->description !!}
                </div>
            </div>
        </div>
    </section>
    <!-- Blog-->
    <section class="section-md bg-transparent">
        <div class="container">
            <div class="text-block text-block-1 text-center">
                <h4 class="text-primary">Další aktuality</h4>
            </div>
            <div class="row row-30 justify-content-center">
                @foreach($otherPosts as $post)
                <div class="col-xs-9 col-sm-6 col-md-4">
                    <!-- Post-->
                    <div class="post post-responsive post-responsive-1">
                        <a class="post-media" href="{{ route('posts.show', $post) }}">
                            <img class="post-img" src="{{ url('images/posts/'.$post->image) }}" alt="" width="370" height="255"/>
                        </a>
                        <div class="post-meta">
                            <div class="post-meta-item">
                                <div class="post-meta-icon custom-font-calendar"></div>
                                <div class="post-date">{{ $post->created_at }}</div>
                            </div>
                        </div>
                        <div class="post-title h6"><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
