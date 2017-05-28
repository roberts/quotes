@extends('layouts.app')
@section('breadcrumbs')
    "@type": "ListItem",
    "position": 1,
    "item": {
        "@id": "https://tipoff.com/quotes",
        "name": "Quotes"
    }
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Quotes</div>

                    <div class="panel-body">
                        @foreach ($quotes as $quote)
                            <article>
                                <h4>" {{ $quote->quote_text }} "</h4>
                                <div class="body">- <a href="{{ $quote->author->path() }}">{{ $quote->author->display_name }}</a></div>
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
