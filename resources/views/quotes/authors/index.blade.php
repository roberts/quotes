@extends('layouts.app')

@section('title', 'Business and Leadership Quote Authors | Tipoff')

@section('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')

@section('featured_image', 'https://tipoff.com/ogimage.jpg')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Business and Leadership</div>
      <div class="title">Quote Authors</div>
      <div>Published: June 2017</div>
    </div>

    <section class="main mdl-grid">
        <div class="featured-list mdl-grid">
            @foreach ($featuredauthors as $author)
                <a href="{{ $author->path() }}" class="featured-authors mdl-cell mdl-cell--4-col-tablet mdl-cell--4-col-phone">
                    <div class="author-avatar">
                        <div class="hexa">
                            <div class="hex1">
                                <div class="hex2">
                                    <img src="/img/{{ $author->slug }}.jpg" height="50" width="50">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-author">{{ $author->display_name }}</div>
                </a>
            @endforeach
        </div>

        <div class="content mdl-cell mdl-cell--4-col-phone">
            <h2>Additional Quote Authors</h2>
            <div class="secondary-list mdl-grid">
                @foreach ($secondaryauthors as $author)
                    <a href="{{ $author->path() }}" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="min-width:210px;"><div class="secondary-author">{{ $author->display_name }}</div></a>
                @endforeach
            </div>
        </div>
        @include('layouts.sidebar-quotes')
    </section>
@endsection
