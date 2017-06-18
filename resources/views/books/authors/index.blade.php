@extends('layouts.app')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Business and Leadership</div>
      <div class="title">Book Authors</div>
      <div>Published: June 2017</div>
    </div>

    <section class="main">
        @foreach ($bookauthors as $bookauthor)
            <article>
                <div class="body"><a href="{{ $bookauthor->path() }}">{{ $bookauthor->display_name }}</a></div>
            </article>
        @endforeach
    </section>

@endsection
