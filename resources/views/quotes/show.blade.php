@extends('layouts.app')

@section('title', $quote->author->display_name .' Quote #'. $quote->id .' | Tipoff.com')

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
      "name": "{{ $quote->author->display_name }}"
        }
  },{
    "@type": "ListItem",
    "position": 3,
    "item": {
      "@id": "https://tipoff.com{{ $quote->path() }}",
      "name": "Quote #{{ $quote->id }}"
        }
@endsection

@section('description', $quote->author->display_name .' Quote with identification number of '. $quote->id .' is '. $quote->quote_text .' - Leave a comment.')

@section('featured_image', 'https://tipoff.com/ogimage.jpg')

@php
    $urlauthorname = str_replace(" ", "%20", $quote->author->display_name);
@endphp

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Business and Leadership</div>
      <div class="title"><a href="{{ $quote->author->path() }}">Quote from {{ $quote->author->display_name }}</a></div>
      <div>Published: June 2017</div>
    </div>

    <section class="main mdl-grid">
        <div class="content mdl-cell mdl-cell--4-col-phone">
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
            @if ($graphics)
                <div class="sidebar-title">Shareable Graphics of this Quote</div>
                @foreach ($graphics as $graphic)
                    <paper-card image="{{ $graphic->path() }}">
                      <div class="card-content">
                        <div class="sidebar-connect">Share This Image</div>
                        <p class="sidebar-connect-p">This graphic was created to share quote #{{ $quote->id }} from {{ $quote->author->display_name }} on social media:</p>
                      </div>
                      <div class="card-actions">
                        <div class="horizontal justified">
                            <a href="https://www.facebook.com/Tipoff" tabindex="-1"><paper-icon-button class="social" src="/img/facebook.png"></paper-icon-button></a>
                            <a href="https://twitter.com/TipoffProject" tabindex="-1"><paper-icon-button src="/img/twitter.png"></paper-icon-button></a>
                            <a href="https://www.linkedin.com/company/TipoffProject" tabindex="-1"><paper-icon-button src="/img/linkedin.png"></paper-icon-button></a>
                            <a href="https://www.pinterest.com/pin/create/button/?url=https://tipoff.com/{{ $quote->author->path() }}&media={{ $graphic->path() }}&description=View%20more%20Business%20and%20Leadership%20Quotes%20from%20{{ $urlauthorname }}"><paper-icon-button src="/img/linkedin.png"></paper-icon-button></a>
                        </div>
                      </div>
                    </paper-card>
                @endforeach
            @endif
                <div class="sidebar-title">Citations</div>
                <paper-card>
                      <div class="card-content">
                        <div class="sidebar-connect">Cite this Quote</div>
                        <p class="sidebar-connect-p">Feel free to use this quote from {{ $quote->author->display_name }} or any of our other curated quotes in your book, paper, website, or any published work. Here are the common styles to provide citation:</p>
                      </div>
                      <div class="card-actions">
                        <p class="sidebar-connect-p"><b>APA Style Citation</b></br>{{ $quote->author->display_name }}. (n.d.). Tipoff.com. Retrieved {{ date('F j, Y') }}, from Tipoff.com Web site: https://tipoff.com{{ $quote->path() }}</p>
                      </div>
                      <div class="card-actions">
                        <p class="sidebar-connect-p"><b>Chicago Style Citation</b></br>{{ $quote->author->display_name }}. Tipoff.com, Tipoff Inc, {{ date('Y') }}. https://tipoff.com{{ $quote->path() }}, accessed {{ date('F j, Y') }}.</p>
                      </div>
                      <div class="card-actions">
                        <p class="sidebar-connect-p"><b>MLA Style Citation</b></br>"{{ $quote->author->display_name }}." Tipoff.com. Tipoff Inc, {{ date('Y') }}. {{ date('j F Y') }}. https://tipoff.com{{ $quote->path() }}</p>
                      </div>
                    </paper-card>
        </div>
        @include('layouts.sidebar-quotes')
    </section>
    <script type="text/javascript" async defer data-pin-custom="true" src="//assets.pinterest.com/js/pinit.js"></script>
@endsection