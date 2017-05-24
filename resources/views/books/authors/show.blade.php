@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $bookauthor->display_name }} Books</div>

                    <div class="panel-body">
                        @foreach ($bookauthor->books as $book)
                            <article>
                                <h4>" {{ $book->title }} "</h4>
                                <div class="body">- {{ $bookauthor->display_name }}</div>
                                <div class="body">- <a href="{{ $book->path() }}">Comments</a></div>
                            </article>

                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
