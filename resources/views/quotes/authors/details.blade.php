@if (auth()->check())
    <paper-card>
        <div class="card-content">
            <paper-button title="more info" onclick="_toggle()"><iron-icon id="info-icon" icon="icons:expand-less"></iron-icon>{{ $quoteauthor->display_name }} Bio</paper-button>
        </div>
        <iron-collapse id="more-info">
            <div class="card-actions">
                <div class="horizontal justified">
                    Profiles: 
                    <a href="https://www.facebook.com/Tipoff" tabindex="-1"><paper-icon-button class="social" src="/img/facebook.png"></paper-icon-button></a>
                    <a href="https://twitter.com/TipoffProject" tabindex="-1"><paper-icon-button src="/img/twitter.png"></paper-icon-button></a>
                    <a href="https://www.instagram.com/tipoff/" tabindex="-1"><paper-icon-button class="social" style="color: red;" src="/img/instagram.png"></paper-icon-button></a>
                    <a href="https://www.linkedin.com/company/TipoffProject" tabindex="-1"><paper-icon-button src="/img/linkedin.png"></paper-icon-button></a>
                </div>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent enim ante, tempus eget volutpat ac, cursus ac ante. Nulla facilisi. Praesent sed lacinia ligula. Donec malesuada nisl eget quam iaculis, vel placerat justo cursus.
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
@endif