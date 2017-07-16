@extends('layouts.app')

@section('title', $quoteauthor->display_name .' Quotes | Tipoff.com')

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
    <section class="details mdl-grid">
        <div class="content mdl-cell mdl-cell--4-col-phone">
            @include('quotes.authors.detailsform')
        </div>
        <div class="sidebar mdl-cell mdl-cell--4-col-phone">
          <paper-card>
            <form method="POST" action="/quotes/{{ $quoteauthor->slug }}/submissions" style="max-width:300px;">
                <div class="card-content">
                    {{ csrf_field() }}
                    <div class="mdl-textfield mdl-js-textfield">
                      <textarea class="mdl-textfield__input" type="text" style="max-width:268px;" rows= "5" name="quote_text" id="quote_text"></textarea>
                      <label class="mdl-textfield__label" for="sample5">New {{ $quoteauthor->display_name }} quote</label>
                    </div>
                </div>
                <div class="card-actions">
                    <button type="submit" class="mdl-button mdl-js-button mdl-button--accent">Submit</button>
                </div>
            </form>
          </paper-card>
          @if ($submissioncount)
            <paper-card>
                <div class="card-actions">
                    <a href="{{ $quoteauthor->path() }}/submissions" tabindex="-1">
                      <paper-button>{{ $submissioncount }} Quote @if ($submissioncount == 1) Submission @else Submissions @endif</paper-button>
                    </a>
                </div>
            </paper-card>
          @endif
        </div>
    </section>
    @endif

    <section class="main mdl-grid">
        <div class="content mdl-cell mdl-cell--4-col-phone">
            @if ($authordetail)
                @include('quotes.authors.details')
            @endif

            @foreach ($quoteauthor->quotes as $quote)
                <tipoff-quote id="{{ $quote->id }}" quote="{{ $quote->quote_text }}" author="{{ $quoteauthor->display_name }}" slug="{{ $quoteauthor->slug }}" more="{{ $quoteauthor->quotes->count() }}" @if ($loop->first) graphics @endif condense ></tipoff-quote>
                <br>
            @endforeach
        </div>
        @include('layouts.sidebar-quotes')
    </section>

@endsection
