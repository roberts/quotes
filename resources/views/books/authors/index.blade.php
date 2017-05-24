@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Books</div>

                    <div class="panel-body">
                        @foreach ($books as $book)
                            <article>
                                <h4>" {{ $book->book_text }} "</h4>
                                <div class="body">- <a href="{{ $book->author->path() }}">{{ $book->author->display_name }}</a></div>
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
