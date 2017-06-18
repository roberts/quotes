@extends('layouts.app')

@section('title', $quote->author->display_name .' Quote #'. $quote->id .' | Tipoff')

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
      "@id": "https://tipoff.com{{ $quote->author->path() }}",
      "name": "{{ $quote->author->display_name }}",
        }
  },{
    "@type": "ListItem",
    "position": 3,
    "item": {
      "@id": "https://tipoff.com{{ $quote->path() }}",
      "name": "Quote #{{ $quote->id }}",
        }
@endsection

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Business and Leadership</div>
      <div class="title"><a href="{{ $quote->author->path() }}">Quote from {{ $quote->author->display_name }}</a></div>
      <div>Published: June 2017</div>
    </div>

    <section class="main">
        <article>
            <h4>"{{ $quote->quote_text }}"</h4>
        </article>

        @if (auth()->check())
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form method="POST" action="{{ $quote->path() . '/comments' }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <textarea name="body" id="body" class="form-control" placeholder="Have something to say?" rows="5"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-default">Post</button>
                    </form>
                </div>
            </div>
        @else
            <p class="text-center">Please <a href="{{ route('login') }}">sign in</a> to participate in this discussion.</p>
        @endif
    </section>
@endsection