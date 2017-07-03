<div class="sidebar mdl-cell mdl-cell--4-col-phone">
    @php
        $avatars = array(4, 5, 6, 7, 8, 9, 10, 11, 22, 72, 90, 95, 99, 100);
    @endphp
    <paper-card image="/ogimage.jpg">
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
    <div class="sidebar-title">Trending</div>
    <paper-card>
        <div class="trending">
            @foreach ($sideauthors as $author)
            <div class="trend">
                <a href="{{ $author->path() }}"><div class="trending-item">{{ $author->display_name }}</div></a>
            </div>
            @endforeach
        </div>
    </paper-card>
    <div class="sidebar-title">Popular Quotes</div>
    @foreach ($sidequotes as $quote)
        <tipoff-quote id="{{ $quote->id }}" quote="{{ $quote->quote_text }}" author="{{ $quote->author->display_name }}" slug="{{ $quote->author->slug }}" more="{{ $quote->author->quotes->count() }}" @if (in_array($quote->author->id, $avatars )) avatar="/img/{{ $quote->author->slug }}.jpg" @endif @if ($loop->first) graphics @endif ></tipoff-quote>
        <br>
    @endforeach
</div>