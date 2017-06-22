<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">

    <title>@yield('title', 'Tipoff Project')</title>
    <meta name="description" content="@yield('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')">

    <meta property=”og:type” content=”article”>
    <meta property="og:url" content="https://tipoff.com{{ $_SERVER['REQUEST_URI'] }}">
    <meta property="og:site_name" content="Tipoff">
    <meta property="og:image" content="@yield('featured_image', 'https://tipoff.com/ogimage.jpg')">
    <meta property="og:image:secure_url" content="@yield('featured_image', 'https://tipoff.com/ogimage.jpg')">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:title" content="@yield('title', 'Tipoff Project')">
    <meta property="og:description" content="@yield('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')">
    <meta property=”article:publisher” content=”https://www.facebook.com/Tipoff”>
    <meta property="article:published_time" content="@yield('created_at', '2017-06-19T13:30:00-04:00')">
    <meta property="article:modified_time" content="@yield('updated_at', '2017-06-19T13:30:00-04:00')">
    <meta property="article:section" content="Business">
    <meta property=”article:author” content=”@yield('fbauthor', 'https://www.facebook.com/DrewRoberts')”>
    <meta property="article:tag" content="Business">
    <meta property="fb:pages" content="153199288166906">

    <meta name=”twitter:url” content="https://tipoff.com{{ $_SERVER['REQUEST_URI'] }}">
    <meta name="twitter:title" content="@yield('title', 'Tipoff Project')">
    <meta name="twitter:description" content="@yield('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')">
    <meta name="twitter:image" content="@yield('featured_image', 'https://tipoff.com/ogimage.jpg')">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@TipoffProject">
    <meta name="twitter:creator" content="@DrewRoberts">

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
    
    <!-- Javascript libraries -->
    <script src="/bower_components/webcomponentsjs/webcomponents-lite.js"></script>
    
    <!-- Polymer Elements -->
    <link rel="import" href="/bower_components/polymer/polymer.html">
    <link rel="import" href="/bower_components/paper-styles/shadow.html">
    <link rel="import" href="/bower_components/iron-ajax/iron-ajax.html">
    <link rel="import" href="/bower_components/app-layout/app-drawer/app-drawer.html">
    <link rel="import" href="/bower_components/app-layout/app-drawer-layout/app-drawer-layout.html">
    <link rel="import" href="/bower_components/app-layout/app-header/app-header.html">
    <link rel="import" href="/bower_components/app-layout/app-header-layout/app-header-layout.html">
    <link rel="import" href="/bower_components/app-layout/app-scroll-effects/app-scroll-effects.html">
    <link rel="import" href="/bower_components/app-layout/app-toolbar/app-toolbar.html">
    <link rel="import" href="/bower_components/app-route/app-location.html">
    <link rel="import" href="/bower_components/app-route/app-route.html">
    <link rel="import" href="/bower_components/iron-pages/iron-pages.html">
    <link rel="import" href="/bower_components/iron-image/iron-image.html">
    <link rel="import" href="/bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="/bower_components/iron-selector/iron-selector.html">
    <link rel="import" href="/bower_components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="/bower_components/paper-tabs/paper-tabs.html">
    <link rel="import" href="/bower_components/paper-card/paper-card.html">
    <link rel="import" href="/bower_components/paper-fab/paper-fab.html">
    <link rel="import" href="/bower_components/app-layout/app-grid/app-grid-style.html">
    <link rel="import" href="/bower_components/iron-flex-layout/iron-flex-layout.html">
    
    <!-- Tipoff Web Components -->
    <link rel="import" href="/elements/tipoff-navigation.html">
    
    <!-- Material Design Lite -->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.grey-red.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <!-- Styles -->
    <link href="{{ asset('css/stylesc.css') }}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "name": "Tipoff",
      "alternateName": "Tipoff.com",
      "url": "https://tipoff.com"
    }
    </script>
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "Organization",
      "name": "Tipoff",
      "logo": "https://tipoff.com/logo.png",
      "founder": "Drew Roberts",
      "url": "https://tipoff.com",
          "sameAs": [
            "https://www.facebook.com/Tipoff",
            "https://www.instagram.com/tipoff/",
            "https://www.linkedin.com/company/TipoffProject",
            "https://twitter.com/TipoffProject",
            "https://plus.google.com/+Tipoff"
          ]
    }
    </script>
    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            @yield('breadcrumbs')
        }]
    }
    </script>

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
        <div style="height:120px;"></div>
        <div class="content-paper">
            @yield('content')
        </div>

        <div style="height:60px;"></div>

    </div>
        <footer class="mdl-mega-footer footer-shadow">
          <div class="mdl-mega-footer__middle-section" style="max-width: 970px;margin:auto;">

            <div class="mdl-mega-footer__drop-down-section">
              <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer__heading">Quotes</h1>
              <ul class="mdl-mega-footer__link-list">
                <li><a href="/quotes">Index</a></li>
                <li><a href="/quotes/authors">Authors</a></li>
                <li><a href="/quotes/topics">Topics</a></li>
              </ul>
            </div>

            <div class="mdl-mega-footer__drop-down-section">
              <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer__heading">Books</h1>
              <ul class="mdl-mega-footer__link-list">
                <li><a href="/books">Titles</a></li>
                <li><a href="/books/authors">Authors</a></li>
                <li><a href="/books/topics">Topics</a></li>
              </ul>
            </div>

            <div class="mdl-mega-footer__drop-down-section">
              <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer__heading">About</h1>
              <ul class="mdl-mega-footer__link-list">
                <li><a href="/company">Company Intro</a></li>
                <li><a href="/company/advertising">Advertising</a></li>
                <li><a href="/company/contact">Contact</a></li>
                <li><a href="/company/staff">Staff</a></li>
                <li><a href="/company/team">Team</a></li>
              </ul>
            </div>

            <div class="mdl-mega-footer__drop-down-section">
              <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
              <h1 class="mdl-mega-footer__heading">Social</h1>
              <ul class="mdl-mega-footer__link-list">
                <li><a href="https://www.facebook.com/Tipoff">Facebook</a></li>
                <li><a href="https://www.instagram.com/tipoff/">Instagram</a></li>
                <li><a href="https://www.linkedin.com/company/TipoffProject">LinkedIn</a></li>
                <li><a href="https://twitter.com/TipoffProject">Twitter</a></li>
                <li><a href="https://www.pinterest.com/tipoff/">Pinterest</a></li>
                <li><a href="https://plus.google.com/+Tipoff">Google+</a></li>
              </ul>
            </div>

          </div>

          <div class="mdl-mega-footer__bottom-section" style="max-width: 970px;margin:auto;">
            <div class="mdl-logo">Tipoff</div>
            <ul class="mdl-mega-footer__link-list">
              <li><a href="/company/privacy">Privacy</a></li>
              <li><a href="/company/terms">Terms</a></li>
            </ul>
          </div>

        </footer>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
