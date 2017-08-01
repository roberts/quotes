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
                        <div class="card-actions">
                            <a href="/quotes/authors/data" tabindex="-1">
                              <paper-button>Share {{ $graphic->name }}</paper-button>
                            </a>
                        </div>
                    </paper-card>
                    <paper-card image="{{ $graphic->path() }}">
                      <div class="card-content">
                        <div class="sidebar-connect">Connect with Tipoff</div>
                        <p class="sidebar-connect-p">Receive daily quotes and more resources for business and leadership by connecting with us on social media.</p>
                      </div>
                      <div class="card-actions">
                        <div class="horizontal justified">
                            <a href="https://www.facebook.com/Tipoff" tabindex="-1"><paper-icon-button class="social" src="/img/facebook.png"></paper-icon-button></a>
                            <a href="https://www.instagram.com/tipoff/" tabindex="-1"><paper-icon-button class="social" style="color: red;" src="/img/instagram.png"></paper-icon-button></a>
                            <a href="https://www.pinterest.com/tipoff/" tabindex="-1"><paper-icon-button class="social" style="color: red;" src="/img/pinterest.png"></paper-icon-button></a>
                            <a href="https://twitter.com/TipoffProject" tabindex="-1"><paper-icon-button src="/img/twitter.png"></paper-icon-button></a>
                            <a href="https://plus.google.com/+Tipoff" tabindex="-1"><paper-icon-button src="/img/google-plus.png"></paper-icon-button></a>
                            <a href="https://www.linkedin.com/company/TipoffProject" tabindex="-1"><paper-icon-button src="/img/linkedin.png"></paper-icon-button></a>
                        </div>
                      </div>
                    </paper-card>
                @endforeach
            @endif
                <div class="col-md-8 col-md-offset-2">
                <h2>Cite this Quote</h2>
                <p>Feel free to use this quote from {{ $quote->author->display_name }} or any of our other curated quotes in your book, paper, website, or any published work. Here are the common styles to provide citation:</p>
                <b>APA Style Citation</b><br>
                {{ $quote->author->display_name }}. (n.d.). Tipoff.com. Retrieved {{ date('F j, Y') }}, from Tipoff.com Web site: https://tipoff.com{{ $quote->path() }}<br>
                <b>Chicago Style Citation</b><br>
                {{ $quote->author->display_name }}. Tipoff.com, Tipoff Inc, {{ date('Y') }}. https://tipoff.com{{ $quote->path() }}, accessed {{ date('F j, Y') }}.<br>
                <b>MLA Style Citation</b><br>
                "{{ $quote->author->display_name }}." Tipoff.com. Tipoff Inc, {{ date('Y') }}. {{ date('j F Y') }}. https://tipoff.com{{ $quote->path() }}<br>
                </div>
        </div>
        @include('layouts.sidebar-quotes')
    </section>
@endsection