    <paper-card>
        <div class="card-content">
            <paper-button title="more info" style="width:100%; -webkit-justify-content: left;" onclick="_toggle()"><iron-icon id="info-icon" icon="icons:expand-less"></iron-icon> About {{ $quoteauthor->display_name }}</paper-button>
        </div>
        <iron-collapse id="more-info">
            <div class="card-actions">
            @if ($authordetail->wikipedia || $authordetail->facebook || $authordetail->instagram || $authordetail->twitter || $authordetail->linkedin)
                <div class="horizontal justified">
                    Profiles: 
                    @if ($authordetail->wikipedia)
                        <a href="https://en.wikipedia.org/wiki/{{ $authordetail->wikipedia }}" tabindex="-1"><paper-icon-button class="social" src="/img/wikipedia.png" id="{{ $quoteauthor->slug }}-wikipedia" alt="{{ $quoteauthor->display_name }} Wikipedia Page"></paper-icon-button></a>
                        <paper-tooltip for="{{ $quoteauthor->slug }}-wikipedia" offset="0">{{ $quoteauthor->display_name }} on Wikipedia</paper-tooltip>
                    @endif
                    @if ($authordetail->facebook)
                        <a href="https://www.facebook.com/{{ $authordetail->facebook }}" tabindex="-1"><paper-icon-button class="social" src="/img/facebook.png" id="{{ $quoteauthor->slug }}-facebook" alt="Official {{ $quoteauthor->display_name }} Facebook Page"></paper-icon-button></a>
                        <paper-tooltip for="{{ $quoteauthor->slug }}-facebook" offset="0">{{ $quoteauthor->display_name }} on Facebook</paper-tooltip>
                    @endif
                    @if ($authordetail->instagram)
                        <a href="https://www.instagram.com/{{ $authordetail->instagram }}/" tabindex="-1"><paper-icon-button class="social" style="color: red;" src="/img/instagram.png" id="{{ $quoteauthor->slug }}-instagram" alt="Official {{ $quoteauthor->display_name }} Instagram Account"></paper-icon-button></a>
                        <paper-tooltip for="{{ $quoteauthor->slug }}-instagram" offset="0">{{ $quoteauthor->display_name }} on Instagram</paper-tooltip>
                    @endif
                    @if ($authordetail->twitter)
                        <a href="https://twitter.com/{{ $authordetail->twitter }}" tabindex="-1"><paper-icon-button src="/img/twitter.png" id="{{ $quoteauthor->slug }}-twitter" alt="Official {{ $quoteauthor->display_name }} Twitter Account"></paper-icon-button></a>
                        <paper-tooltip for="{{ $quoteauthor->slug }}-twitter" offset="0">{{ $quoteauthor->display_name }} on Twitter</paper-tooltip>
                    @endif
                    @if ($authordetail->linkedin)
                        <a href="https://www.linkedin.com/in/{{ $authordetail->linkedin }}" tabindex="-1"><paper-icon-button src="/img/linkedin.png" id="{{ $quoteauthor->slug }}-linkedin" alt="Official {{ $quoteauthor->display_name }} LinkedIn Account"></paper-icon-button></a>
                        <paper-tooltip for="{{ $quoteauthor->slug }}-linkedin" offset="0">{{ $quoteauthor->display_name }} on LinkedIn</paper-tooltip>
                    @endif
                </div>
            @endif
            @if ($authordetail->known_for)
                <div>Known For: {{ $authordetail->known_for }}</div>
            @endif
            @if ($authordetail->intro)
                <div>Intro: {{ $authordetail->intro }}</div>
            @endif
            @if ($authordetail->full_name)
                <div>Full Name: {{ $authordetail->full_name }}</div>
            @endif
            @if ($authordetail->birth)
                <div class="horizontal justified">
                    Born: {{ $authordetail->birth }} @if ($authordetail->death) Died: {{ $authordetail->death }} @else - Age: {{  \Carbon\Carbon::createFromTimeStamp(strtotime($authordetail->birth))->diff(\Carbon\Carbon::now())->format('%y years') }} @endif
                </div>
            @endif
            @if ($authordetail->bio)
                <div>Bio: {{ $authordetail->bio }}</div>
            @endif
            @if ($authordetail->quotes_summary)
                <div>Summary of Quotes: {{ $authordetail->quotes_summary }}</div>
            @endif
            </div>
        </iron-collapse>
        <script>
          function _toggle() {
            var moreInfo = document.getElementById('more-info');
            var paperButton = Polymer.dom(event).localTarget;
            var infoIcon = document.getElementById('info-icon');
            infoIcon.icon = moreInfo.opened ? 'icons:expand-less' : 'icons:expand-more';
            moreInfo.toggle();
          }
        </script>
    </paper-card>
    <div class="sidebar-title">Quotes</div>