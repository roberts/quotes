@extends('layouts.app')

@section('title', 'Business and Leadership Quote Authors | Tipoff')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Business and Leadership</div>
      <div class="title">Quote Authors</div>
      <div>Published: June 2017</div>
    </div>

    <section class="main">
        @foreach ($quoteauthors as $quoteauthor)
            <article>
                <div class="body"><a href="{{ $quoteauthor->path() }}">{{ $quoteauthor->display_name }}</a></div>
            </article>
        @endforeach
    </section>
@endsection
