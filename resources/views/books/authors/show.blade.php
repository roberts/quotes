@extends('layouts.app')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Business and Leadership</div>
      <div class="title">{{ $bookauthor->display_name }} Books</div>
      <div>Published: June 2017</div>
    </div>

    <section class="main">
      <br><br>
    </section>
    
@endsection
