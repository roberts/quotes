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
    <style>

      .image {
        height: 240px;
        background-repeat: no-repeat;
        background-position: center center;
        background-size: contain;
      }

      .pre {
        padding: 24px 0;
        text-align: center;
        font-size: 14px;
        letter-spacing: 1px;
        color: #999;
      }

      .title {
        padding: 16px 0;
        font-size: 30px;
        font-weight: 600;
      }

      .main {
        padding: 24px 80px;
        border-top: 1px solid #ddd;
        font-size: 18px;
        line-height: 32px;
        letter-spacing: 1px;
      }

      h3 {
        font-size: 24px;
        font-weight: 400;
        line-height: 32px;
      }

    </style>

    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Business and Leadership</div>
      <div class="title">{{ $quoteauthor->display_name }} Quotes</div>
      <div>Published: June 2017</div>
    </div>

    <section class="main">
      @foreach ($quoteauthor->quotes as $quote)
            <article>
                <h3>"{{ $quote->quote_text }}"</h3>
                <p>- {{ $quoteauthor->display_name }}<br>
                <a href="{{ $quote->path() }}">Comments</a></p>
            </article>
            <br>
        @endforeach
    </section>

@endsection
