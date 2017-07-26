@extends('layouts.app')

@section('title', 'Authors of Business and Leadership Quote | Tipoff.com')

@section('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')

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
@endsection

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Business and Leadership</div>
      <div class="title">Authors of Business & Leadership Quotes</div>
      <div>Published: June 2017</div>
    </div>

    @if (auth()->check())
    <section class="details mdl-grid">
        <div class="content mdl-cell mdl-cell--4-col-phone">
            <paper-card>
                <form method="POST" action="/quotes/authors" style="max-width:300px;">
                    <div class="card-content">
                        {{ csrf_field() }}
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="display_name" name="display_name" value="{{ old('display_name') }}">
                            <label class="mdl-textfield__label" for="display_name">New Author Name</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" pattern="[A-Za-z-]*" id="last_name" name="last_name" value="{{ old('last_name') }}">
                            <label class="mdl-textfield__label" for="last_name">Last Name Again</label>
                            <span class="mdl-textfield__error">For indexing only, no spaces</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" pattern="[a-z-]*" id="slug" name="slug" value="{{ old('slug') }}">
                            <label class="mdl-textfield__label" for="slug">Slug</label>
                            <span class="mdl-textfield__error">Only lowercase letters and hyphens</span>
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
                <div class="trending">
                    @foreach ($missingquotes as $authoradd)
                    <div class="trend">
                        <a href="{{ $authoradd->path() }}"><div class="trending-item">{{ $authoradd->display_name }}</div></a>
                    </div>
                    @endforeach
                    <div class="trend">
                        <a href="/quotes/authors/missing"><div class="trending-item">{{ $missingcount }} More Missing Quotes</div></a>
                    </div>
                </div>
            </paper-card>
        </div>
    </section>
    @endif

    <section class="main mdl-grid">
        <div class="featured-list mdl-grid">
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

        <div class="content mdl-cell mdl-cell--4-col-phone">
            <h2>Additional Quote Authors</h2>
            <div class="secondary-list mdl-grid">
                @foreach ($secondaryauthors as $author)
                    <a href="{{ $author->path() }}" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="min-width:210px;"><div class="secondary-author">{{ $author->display_name }}</div></a>
                @endforeach
            </div>
        </div>
        @include('layouts.sidebar-quotes')
    </section>
@endsection
