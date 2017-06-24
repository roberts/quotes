@extends('layouts.app')

@section('title', 'Advertising on Tipoff Project')

@section('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')

@section('featured_image', 'https://tipoff.com/ogimage.jpg')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Tipoff Project</div>
      <div class="title">Advertsising</div>
      <div>Published: June 2017</div>
    </div>

    <section class="main">
            <article>
                <quote-card>
                  <span class="quote">Here is our quote passed to the element through a content span slot. What else can we say?</span>
                  <span class="author">Drew Roberts</span>
                  <span class="title">1000000</span>
                </quote-card>
                <h4>Advertising opportunities will go here.</h4>
            </article>
    </section>
@endsection