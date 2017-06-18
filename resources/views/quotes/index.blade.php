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

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Business and Leadership</div>
      <div class="title">Quotes</div>
      <div>Published: June 2017</div>
    </div>

    <section class="main">
        @foreach ($quotes as $quote)
            <article>
                <h4>" {{ $quote->quote_text }} "</h4>
                <div class="body">- <a href="{{ $quote->author->path() }}">{{ $quote->author->display_name }}</a></div>
                <div class="body">- <a href="{{ $quote->path() }}">Comments</a></div>
            </article>
        @endforeach
    </section>
@endsection
