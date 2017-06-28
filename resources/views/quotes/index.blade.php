@extends('layouts.app')

@section('title', 'Tipoff Quotes')

@section('breadcrumbs')
    "@type": "ListItem",
    "position": 1,
    "item": {
        "@id": "https://tipoff.com/quotes",
        "name": "Quotes"
    }
@endsection

@section('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')

@section('featured_image', 'https://tipoff.com/ogimage.jpg')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Business and Leadership</div>
      <div class="title">Quotes</div>
      <div>Published: June 2017</div>
    </div>

    <section class="main">
        @foreach ($jfkquotes as $jfkquote)
            <tipoff-quote id="{{ $jfkquote->id }}" quote="{{ $jfkquote->quote_text }}" author="{{ $jfkquote->author->display_name }}" slug="{{ $jfkquote->author->slug }}" more="70" @if ($jfkquote->author->slug == 'jfk') avatar="/img/jfk.jpg" @endif @if ($loop->first) images @endif ></tipoff-quote>
            <br>
        @endforeach
        @foreach ($quotes as $quote)
            <tipoff-quote id="{{ $quote->id }}" quote="{{ $quote->quote_text }}" author="{{ $quote->author->display_name }}" slug="{{ $quote->author->slug }}" more="70" @if ($quote->author->slug == 'jfk') avatar="/img/jfk.jpg" @endif @if ($loop->first) images @endif ></tipoff-quote>
            <br>
        @endforeach
    </section>
@endsection
