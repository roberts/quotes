@extends('layouts.app')

@section('title', 'Collections | Tipoff')

@section('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')

@section('featured_image', 'https://tipoff.com/ogimage.jpg')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Tipoff Project</div>
      <div class="title">Collections</div>
      <div>Published: June 2017</div>
    </div>

    <section class="main">
        @foreach ($collections as $collection)
            <article>
                <h4><a href="{{ $collection->path() }}">{{ $collection->title }}</a></h4>
            </article>

            <hr>
        @endforeach
    </section>
@endsection