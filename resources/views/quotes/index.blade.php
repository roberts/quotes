@extends('layouts.app')

@section('title', 'Quotes | Tipoff.com')

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
    @php
        $avatars = array(4, 5, 6, 7, 8, 9, 10, 11, 22, 72, 90, 95, 99, 100);
    @endphp
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Business and Leadership</div>
      <div class="title">Quotes</div>
      <div>Updated: Aug 2017</div>
    </div>

    <section class="main mdl-grid">
        <div class="content mdl-cell mdl-cell--4-col-phone">
            @foreach ($quotes as $quote)
                <tipoff-quote id="{{ $quote->id }}" quote="{{ $quote->quote_text }}" author="{{ $quote->author->display_name }}" slug="{{ $quote->author->slug }}" more="{{ $quote->author->quotes->count() }}" @if (in_array($quote->author->id, $avatars )) avatar="/img/{{ $quote->author->slug }}.jpg" @endif ></tipoff-quote>
                <br>
            @endforeach
        </div>
        @include('layouts.sidebar-quotes')
    </section>
@endsection
