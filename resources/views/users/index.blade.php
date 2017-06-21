@extends('layouts.app')

@section('title', 'Tipoff Team')

@section('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')

@section('featured_image', 'https://tipoff.com/ogimage.jpg')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Tipoff Project</div>
      <div class="title">Team Members</div>
      <div>Active Users</div>
    </div>

    <section class="main">
        @foreach ($users as $user)
            <article>
                <h4><a href="{{ $user->path() }}">{{ $user->display_name }}</a></h4>
            </article>

            <hr>
        @endforeach
    </section>
@endsection
