<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">

    <title>Submissions - {{ $quoteauthor->display_name }}</title>

    <!-- See https://goo.gl/OOhYW5 -->
    <link rel="manifest" href="/manifest.json">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png?v=Tipoff">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png?v=Tipoff">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png?v=Tipoff">
    <link rel="mask-icon" href="/safari-pinned-tab.svg?v=Tipoff" color="#d32f2f">
    <link rel="shortcut icon" href="/favicon.ico?v=Tipoff">
    <meta name="apple-mobile-web-app-title" content="Tipoff">
    <meta name="application-name" content="Tipoff">
    <meta name="theme-color" content="#ffffff">
    <link rel="manifest" href="/manifest.json?v=Tipoff">
    
    <!-- Tipoff Web Components -->
    <script src="/bower_components/webcomponentsjs/webcomponents-lite.js"></script>
    <link rel="import" href="/bower_components/polymer/polymer.html">
    <link rel="import" href="/bower_components/paper-fab/paper-fab.html">
    <link rel="import" href="/bower_components/iron-image/iron-image.html">
    <link rel="import" href="/bower_components/iron-icon/iron-icon.html">
    <link rel="import" href="/bower_components/app-layout/app-grid/app-grid-style.html">
    <link rel="import" href="/bower_components/iron-pages/iron-pages.html">
    <link rel="import" href="/bower_components/app-route/app-location.html">
    <link rel="import" href="/bower_components/app-route/app-route.html">
    <link rel="import" href="/elements/tipoff-navigation.html">
    <link rel="import" href="/elements/tipoff-quote.html">

    <link rel="import" href="/bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="/bower_components/iron-icons/communication-icons.html">
    <link rel="import" href="/bower_components/paper-button/paper-button.html">
    <link rel="import" href="/bower_components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="/bower_components/paper-styles/color.html">
    <link rel="import" href="/bower_components/paper-styles/typography.html">
    <link rel="import" href="/bower_components/paper-card/paper-card.html">
    <link rel="import" href="/bower_components/iron-collapse/iron-collapse.html">
    <link rel="import" href="/bower_components/bottom-nav/bottom-nav.html">
    
    <!-- Material Design Lite -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-red.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,500,300italic,500italic,700italic,900,300">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        bottom-nav {
           background-color: #fff;
           height: 132px;
         }
        .green {
            width: 100px;
            height: 100px;
            --paper-icon-button-ink-color: #388E3C;
            background-color: #388E3C;
            color: white;
            border-radius: 3px;
            padding: 2px;
            margin: auto;
         }
        .red {
            width: 100px;
            height: 100px;
            --paper-icon-button-ink-color: #D32F2F;
            background-color: #D32F2F;
            color: white;
            border-radius: 3px;
            padding: 2px;
            margin: auto;
        }
    </style>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

  </head>
  <body>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-100525006-1', 'auto');
      ga('send', 'pageview');
    </script>
    <div class="full" style="background-color: #9E9E9E;">
        <tipoff-navigation></tipoff-navigation>
        <div class="content-paper">
            <div class="pre">
              <div class="title">{{ $quoteauthor->display_name }}</div>
              <div>Quote Submission</div>
            </div>

            <section class="main mdl-grid">
                <div class="content mdl-cell mdl-cell--4-col-phone">
                @if ($submission)
                    {{ $submission->quote_text }}
                @else
                    Go get some more quotes for <a href="{{ $quoteauthor->path() }}">{{ $quoteauthor->display_name }}</a>!
                @endif
                </div>
            </section>
        </div>
        <div style="height:400px;"></div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('javascript')
    <script>
        function approve() {
          document.getElementById('approve').submit();
        }
        function rejection() {
          document.getElementById('rejection').submit();
        }
    </script>
    @if ($submission)
    <bottom-nav fixed>
    <div class="mdl-grid center-items" style="max-width: 960px;">
        <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col">
            <form id="approve" action="{{ $quoteauthor->path() }}/quotes" method="post" style="margin: auto; width: 100px">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $submission->id }}">
                <paper-icon-button onclick="approve()" icon="icons:check" title="Approve" class="green"></paper-icon-button>
            </form>
        </div>
        <div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--2-col">
            <form id="rejection" action="{{ $quoteauthor->path() }}/rejections" method="post" style="margin: auto; width: 100px">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $submission->id }}">
            <paper-icon-button onclick="rejection()" icon="icons:clear" title="Reject" class="red"></paper-icon-button>
            </form>
        </div>
    </div>
    </bottom-nav>
    @endif
</body>
</html>
