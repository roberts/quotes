@extends('layouts.app')

@section('title', 'Business and Leadership Books | Tipoff')

@section('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')

@section('featured_image', 'https://tipoff.com/ogimage.jpg')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Business and Leadership</div>
      <div class="title">Books</div>
      <div>Published: June 2017</div>
    </div>

    <section class="main">
        @foreach ($books as $book)
            <article>
                <h4><a href="{{ $book->path() }}">{{ $book->title }}</a></h4>
            </article>
        @endforeach
    </section>
@endsection
