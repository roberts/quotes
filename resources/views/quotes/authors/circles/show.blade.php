@extends('layouts.app')

@if ($circle->display_name)
    @php
        $name = $circle->display_name;
    @endphp
@else
    @php
        $name = $circle->title . ' Personalities';
    @endphp
@endif

@section('title', 'Quotes from '. $name .' | Tipoff.com')

@section('description', 'The top quotes from '. $name .' on leadership and business topics. All quotes are curated by the Tipoff Project team.')

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
      "@id": "https://tipoff.com/quotes/authors",
      "name": "Authors"
        }
    },{
    "@type": "ListItem",
    "position": 3,
    "item": {
      "@id": "https://tipoff.com/quotes/authors/circles",
      "name": "Circles"
        }
@endsection

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Business and Leadership Quotes</div>
      <div class="title">{{ $name }}</div>
      <div>Updated: Aug 2017</div>
    </div>

    @if (auth()->check() && $circle->parent && $missingcircles)
    <section class="details mdl-grid">
        <div class="content mdl-cell mdl-cell--4-col-phone">
            <paper-card>
                <form method="POST" action="/quotes/authors/circles/newrelation" style="width:100%;">
                    <div class="card-content">
                        {{ csrf_field() }}
                        <input type="hidden" name="circle_id" value="{{ $circle->id }}">
                        <select name="author_id">
                            <option value="0">Add Author to the {{ $circle->title }} Circle</option>
                            @foreach ($missingcircles as $author)
                            <option value="{{ $author->id }}">{{ $author->display_name }}</option>
                            @endforeach
                        </select>
                        <div>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="featured-1">
                                <input type="radio" id="featured-1" class="mdl-radio__button" name="featured" value="1">
                                <span class="mdl-radio__label">Featured</span>
                            </label>
                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="featured-2">
                                <input type="radio" id="featured-2" class="mdl-radio__button" name="featured" value="0" checked>
                                <span class="mdl-radio__label">Not Featured</span>
                            </label>
                        </div>
                        <div>
                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="defining-1">
                                <input type="radio" id="defining-1" class="mdl-radio__button" name="defining" value="1">
                                <span class="mdl-radio__label">Defining</span>
                            </label>
                                <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="defining-2">
                                <input type="radio" id="defining-0" class="mdl-radio__button" name="defining" value="0" checked>
                                <span class="mdl-radio__label">Not Defining</span>
                            </label>
                        </div>
                    </div>
                    <div class="card-actions">
                        <button type="submit" class="mdl-button mdl-js-button mdl-button--accent">Submit</button>
                    </div>
                </form>
            </paper-card>
        </div>
        <div class="sidebar mdl-cell mdl-cell--4-col-phone">

        </div>
    </section>
    @endif

    <section class="main mdl-grid">
        @if ($featuredauthors)
        <div class="featured-list mdl-grid mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
            @foreach ($featuredauthors as $author)
                <a href="{{ $author->path() }}" class="featured-authors mdl-cell mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="min-width:280px;">
                    <div class="author-avatar">
                        <div class="hexa">
                            <div class="hex1">
                                <div class="hex2">
                                    <img src="/img/{{ $author->slug }}.jpg" height="50" width="50">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="featured-author">{{ $author->display_name }}</div>
                </a>
            @endforeach
        </div>
        @endif

        <div class="content mdl-cell mdl-cell--4-col-phone">
            <h2>{{ $name }} Alphabetical List</h2>
            <div class="secondary-list mdl-grid">
                @if ($authors)
                @foreach ($authors as $author)
                    <a href="{{ $author->path() }}" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="min-width:210px;"><div class="secondary-author">{{ $author->display_name }}</div></a>
                @endforeach
                @endif
            </div>
        </div>
        @include('layouts.sidebar-quotes')
    </section>
@endsection
