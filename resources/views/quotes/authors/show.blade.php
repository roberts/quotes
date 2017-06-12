@extends('layouts.app')

@section('title', '{{ $quoteauthor->display_name }} Quotes | Tipoff')

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
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $quoteauthor->display_name }} Quotes</div>

                    <div class="panel-body">
                        @foreach ($quoteauthor->quotes as $quote)
                            <article>
                                <h4>" {{ $quote->quote_text }} "</h4>
                                <div class="body">- {{ $quoteauthor->display_name }}</div>
                                <div class="body">- <a href="{{ $quote->path() }}">Comments</a></div>
                            </article>

                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
