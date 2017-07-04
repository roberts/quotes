@extends('layouts.app')

@section('title', 'Quote Topics | Tipoff.com')

@section('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')

@section('featured_image', 'https://tipoff.com/ogimage.jpg')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Business and Leadership</div>
      <div class="title">Quote Topics</div>
      <div>Published: June 2017</div>
    </div>

    <section class="main">
        @foreach ($quotetopics as $quotetopic)
            <article>
                <div class="body"><a href="{{ $quotetopic->path() }}">{{ $quotetopic->title }}</a></div>
            </article>
        @endforeach
    </section>
@endsection