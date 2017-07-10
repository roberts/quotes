@extends('layouts.app')

@section('javascript')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=213866895316124";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@endsection

@section('title', 'Contact Tipoff Project')

@section('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')

@section('featured_image', 'https://tipoff.com/ogimage.jpg')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Tipoff Project</div>
      <div class="title">Contact</div>
      <div>Published: June 2017</div>
    </div>

    <section class="main">
            <article>
                <h4>Contact the team behind Tipoff through Facebook Messenger:</h4>
                <div class="fb-page" data-href="https://www.facebook.com/Tipoff" data-tabs="messages" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Tipoff" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Tipoff">Tipoff</a></blockquote></div>
            </article>
    </section>
@endsection