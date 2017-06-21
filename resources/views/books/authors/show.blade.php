@extends('layouts.app')

@section('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')

@section('featured_image', 'https://tipoff.com/ogimage.jpg')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Business and Leadership</div>
      <div class="title">{{ $bookauthor->display_name }} Books</div>
      <div>Published: June 2017</div>
    </div>

    <section class="main">
      <br><br>
    </section>
    
@endsection
