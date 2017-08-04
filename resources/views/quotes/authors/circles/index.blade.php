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
      <div>Business and Leadership</div>
      <div class="title">Circles of Quote Authors</div>
      <div>Updated: Aug 2017</div>
    </div>

    <section class="main mdl-grid">
        <div class="content mdl-cell mdl-cell--4-col-phone mdl-grid">
            @foreach ($primarycircles as $circle)
                <a href="{{ $circle->path() }}" class="secondary-list mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone mdl-grid"><div class="secondary-author"><b>{{ $circle->title }}</b></div></a>
                @if ($circle->children)
                    @foreach ($circle->children as $child)
                        <a href="{{ $child->path() }}" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="min-width:210px;"><div class="secondary-author">{{ $child->title }}</div></a>
                    @endforeach
                @endif
            @endforeach
        </div>
        @include('layouts.sidebar-quotes')
    </section>
@endsection
