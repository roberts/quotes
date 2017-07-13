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
            <paper-card>
            <form method="POST" action="/quotes/{{ $quoteauthor->slug }}/details">
                <div class="card-content">
                    {{ csrf_field() }}
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="full_name" name="full_name">
                        <label class="mdl-textfield__label" for="full_name">Full Name</label>
                        <span class="mdl-textfield__error">Letters Only</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="birth" name="birth">
                        <label class="mdl-textfield__label" for="birth">Birth</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" id="death" name="death">
                        <label class="mdl-textfield__label" for="death">Death</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield">
                      <textarea class="mdl-textfield__input" type="text" rows= "5" name="known_for" id="known_for"></textarea>
                      <label class="mdl-textfield__label" for="known_for">Known For</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield">
                      <textarea class="mdl-textfield__input" type="text" rows= "5" name="intro" id="intro"></textarea>
                      <label class="mdl-textfield__label" for="intro">{{ $quoteauthor->display_name }} Intro</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield">
                      <textarea class="mdl-textfield__input" type="text" rows= "5" name="bio" id="bio"></textarea>
                      <label class="mdl-textfield__label" for="bio">{{ $quoteauthor->display_name }} Bio</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" pattern="[A-Za-z0-9_]*" id="wikipedia" name="wikipedia">
                        <label class="mdl-textfield__label" for="wikipedia">Wikipedia</label>
                        <span class="mdl-textfield__error">Slug only, not full URL</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" pattern="[A-Za-z0-9.]*" id="facebook" name="facebook">
                        <label class="mdl-textfield__label" for="facebook">Facebook</label>
                        <span class="mdl-textfield__error">Username only, no symbols</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" pattern="[A-Za-z0-9_]*" id="twitter" name="twitter">
                        <label class="mdl-textfield__label" for="twitter">Twitter</label>
                        <span class="mdl-textfield__error">Username only, no symbols</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" pattern="[A-Za-z0-9._-]*" id="linkedin" name="linkedin">
                        <label class="mdl-textfield__label" for="facebook">LinkedIn</label>
                        <span class="mdl-textfield__error">Username only, no symbols</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" pattern="[A-Za-z0-9._]*" id="instagram" name="instagram">
                        <label class="mdl-textfield__label" for="instagram">Instagram</label>
                        <span class="mdl-textfield__error">Username only, no symbols</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield">
                      <textarea class="mdl-textfield__input" type="text" rows= "5" name="quotes_summary" id="quotes_summary"></textarea>
                      <label class="mdl-textfield__label" for="quotes_summary">Quotes Summary</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield">
                      <textarea class="mdl-textfield__input" type="text" rows= "5" name="books_summary" id="books_summary"></textarea>
                      <label class="mdl-textfield__label" for="books_summary">Books Summary</label>
                    </div>
                </div>
                <div class="card-actions">
                    <button type="submit" class="mdl-button mdl-js-button mdl-button--accent">Submit</button>
                </div>
            </form>
          </paper-card>
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
