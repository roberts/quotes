@extends('layouts.app')

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
