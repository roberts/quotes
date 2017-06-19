@extends('layouts.app')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Tipoff Project</div>
      <div class="title">{{ $quotetopic->title }} Quotes</div>
      <div>Topic</div>
    </div>

    <section class="main">
        <article>
            <h4>{{ $quotetopic->title }} quotes will be listed here.</h4>
        </article>
    </section>
@endsection