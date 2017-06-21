@extends('layouts.app')

@section('title', $user->display_name .' | Tipoff')

@section('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')

@section('featured_image', 'https://tipoff.com/ogimage.jpg')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Tipoff Project</div>
      <div class="title">{{ $user->display_name }} Profile</div>
      <div>Team Member</div>
    </div>

    <section class="main">
        <article>
            <h4>{{ $user->display_name }}</h4>
        </article>
    </section>
@endsection