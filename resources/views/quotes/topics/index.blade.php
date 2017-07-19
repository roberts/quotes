@extends('layouts.app')

@section('title', 'Quote Topics | Tipoff.com')

@section('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')

@section('featured_image', 'https://tipoff.com/ogimage.jpg')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Business and Leadership</div>
      <div class="title">Quote Topics</div>
      <div>Published: June 2017</div>
    </div>

    @if (auth()->check())
    <section class="details mdl-grid">
        <div class="content mdl-cell mdl-cell--4-col-phone">
            <paper-card>
                <form method="POST" action="/quotes/topics" style="max-width:300px;">
                    <div class="card-content">
                        {{ csrf_field() }}
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="title" name="title" value="{{ old('title') }}">
                            <label class="mdl-textfield__label" for="title">New Topic Title</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" pattern="[a-z-]*" id="slug" name="slug" value="{{ old('slug') }}">
                            <label class="mdl-textfield__label" for="slug">Slug</label>
                            <span class="mdl-textfield__error">Only lowercase letters and hyphens</span>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="description" name="description" value="{{ old('description') }}">
                            <label class="mdl-textfield__label" for="description">Description</label>
                        </div>
                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="business">
                            <input type="checkbox" id="business" name="business" class="mdl-checkbox__input" value="1">
                            <span class="mdl-checkbox__label">Business</span>
                        </label>
                        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="leadership">
                            <input type="checkbox" id="leadership" name="leadership" class="mdl-checkbox__input" value="1">
                            <span class="mdl-checkbox__label">Leadership</span>
                        </label>
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

    <section class="main">
        @foreach ($quotetopics as $quotetopic)
            <article>
                <div class="body"><a href="{{ $quotetopic->path() }}">{{ $quotetopic->title }}</a></div>
            </article>
        @endforeach
    </section>
@endsection