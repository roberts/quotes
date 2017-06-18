<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">
    <meta name="theme-color" content="#fafafa">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Tipoff Project')</title>
    <meta name="description" content="Tipoff Website">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- See https://goo.gl/OOhYW5 -->
    <link rel="manifest" href="/manifest.json">
    
    <!-- Javascript libraries -->
    <script src="/bower_components/webcomponentsjs/webcomponents-lite.js"></script>
    
    <!-- Polymer Elements -->
    <link rel="import" href="/bower_components/polymer/polymer.html">
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
    
    <style>
        body {
        background-color: #9E9E9E;
      }
    </style>

    <!-- Structured Data -->
    <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "WebSite",
      "name": "Tipoff",
      "alternateName": "Tipoff.com",
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
        <tipoff-navigation></tipoff-navigation>
        <div style="height:70px;"></div>
      
        <div style="max-width:970px;margin:auto;display:block;">
            @yield('content')
        </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
