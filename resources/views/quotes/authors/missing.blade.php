@extends('layouts.app')

@section('title', 'Authors Missing Quotes | Tipoff')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Tipoff Quotes</div>
      <div class="title">Authors Missing Quotes</div>
      <div>Number: 70 of 205</div>
    </div>

    <section class="main mdl-grid">
        <div class="content mdl-cell mdl-cell--4-col-phone">
            <div class="secondary-list mdl-grid">
                @foreach ($authors as $author)
                    <a href="{{ $author->path() }}" class="mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-tablet mdl-cell--4-col-phone" style="min-width:210px;"><div class="secondary-author">{{ $author->display_name }}</div></a>
                @endforeach
            </div>
        </div>
        @include('layouts.sidebar-quotes')
    </section>
@endsection
