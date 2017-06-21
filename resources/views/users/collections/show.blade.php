@extends('layouts.app')

@section('title', $collection->title .' | Tipoff')

@section('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')

@section('featured_image', 'https://tipoff.com/ogimage.jpg')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Tipoff Project Collection</div>
      <div class="title">{{ $collection->title }}</div>
      <div>Created by {{ $collection->creator->display_name }}</div>
    </div>

    <section class="main">
            <article>
                <h4>Collection items will go here.</h4>
            </article>
    </section>
@endsection