@extends('layouts.app')

@section('title', 'Quote Submissions | Tipoff')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Most Recent</div>
      <div class="title">Quote Submissions</div>
    </div>

    <section class="main">
        @foreach ($quotesubmissions as $quotesubmission)
            <article>
                <h4>" {{ $quotesubmission->quote_text }} "</h4>
                <div class="body">- <a href="{{ $quotesubmission->author->path() }}">{{ $quotesubmission->author->display_name }}</a></div>
                <div class="body">Created by: <a href="{{ $quotesubmission->creator->path() }}">{{ $quotesubmission->creator->display_name }}</a> - <a href="{{ $quotesubmission->path() }}">View</a></div>
            </article>

            <hr>
        @endforeach
    </section>

@endsection
