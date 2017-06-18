@extends('layouts.app')

@section('title', $quoteauthor->display_name .' Quotes | Tipoff')

@section('breadcrumbs')
    "@type": "ListItem",
    "position": 1,
    "item": {
        "@id": "https://tipoff.com/quotes",
        "name": "Quotes"
        }
    },{
    "@type": "ListItem",
    "position": 2,
    "item": {
      "@id": "https://tipoff.com{{ $quoteauthor->path() }}",
      "name": "{{ $quoteauthor->display_name }}",
        }
@endsection

@section('content')
    <div class="image" style="#eeeeee; background-image: url('https://g-design.storage.googleapis.com/production/v5/assets/pixate-and-form-1-3-header-2061f19f.svg')"></div>

    <div class="header">
      <div>Business and Leadership</div>
      <div class="title" style="color: #eeeeee;">{{ $quoteauthor->display_name }} Quotes</div>
      <div>Published: June 2017</div>
      <paper-fab icon="app:googleplus-reshare"></paper-fab>
    </div>

    <section class="main">
      @foreach ($quoteauthor->quotes as $quote)
            <article>
                <h3>"{{ $quote->quote_text }}"</h3>
                <p>- {{ $quoteauthor->display_name }}<br>
                <a href="{{ $quote->path() }}">Comments</a></p>
            </article>
            <hr>
        @endforeach
    </section>
    
@endsection
