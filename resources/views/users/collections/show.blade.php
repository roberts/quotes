@extends('layouts.app')

@section('title', $collection->title .' | Tipoff')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Tipoff Project Collection</div>
      <div class="title">{{ $collection->title }}</div>
      <div>Created by {{ $collection->creator->display_name }}</div>
    </div>

    <section class="main">
            <article>
                <h4>Collection items will go here.</h4>
            </article>
    </section>
@endsection