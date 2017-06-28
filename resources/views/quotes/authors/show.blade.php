@extends('layouts.app')

@section('title', $quoteauthor->display_name .' Quotes | Tipoff')

@section('description', 'The top quotes from '. $quoteauthor->display_name .' on leadership and business topics from are listed on this profile page.')

@section('featured_image', 'https://tipoff.com/ogimage.jpg')

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
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Business and Leadership</div>
      <div class="title">{{ $quoteauthor->display_name }} Quotes</div>
      <div>Published: June 2017</div>
    </div>

    @if (auth()->check())
    <div class="pre">
          <form method="POST" action="/quotes/submissions">
              {{ csrf_field() }}
              <input type="hidden" name="author_id" value="{{ $quoteauthor->id }}">
              <input type="hidden" name="author_name" value="{{ $quoteauthor->display_name }}">
              <div class="mdl-textfield mdl-js-textfield">
                <textarea class="mdl-textfield__input" type="text" rows= "5" name="quote_text" id="quote_text"></textarea>
                <label class="mdl-textfield__label" for="sample5">New {{ $quoteauthor->display_name }} quote</label>
              </div>
              <br>
              <button type="submit" class="mdl-button mdl-js-button mdl-button--accent">Submit</button>
          </form>
    </div>
    @else
    @endif

    <section class="main">
      @foreach ($quoteauthor->quotes as $quote)
            <tipoff-quote id="{{ $quote->id }}" quote="{{ $quote->quote_text }}" author="{{ $quoteauthor->display_name }}" slug="{{ $quoteauthor->slug }}" more="{{ $quoteauthor->quotes->count() }}" @if ($quoteauthor->slug == 'jfk') avatar="/img/jfk.jpg" @endif @if ($loop->first) images @endif ></tipoff-quote>
            <br>
        @endforeach
    </section>

@endsection
