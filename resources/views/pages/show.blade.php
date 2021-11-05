@extends('layouts.web')

@section('content')
    <section class="section section-md bg-transparent">
        <div class="container">
            <h2>{{ $page->name }}</h2>
            <p>{!! $page->content !!}</p>
        </div>
    </section>
@endsection
