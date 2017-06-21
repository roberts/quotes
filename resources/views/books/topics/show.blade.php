@extends('layouts.app')

@section('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')

@section('featured_image', 'https://tipoff.com/ogimage.jpg')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Tipoff Project</div>
      <div class="title">{{ $booktopic->title }} Books</div>
      <div>Topic</div>
    </div>

    <section class="main">
        <article>
            <h4>{{ $booktopic->title }} books will be listed here.</h4>
        </article>
    </section>
@endsection