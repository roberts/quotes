@extends('layouts.app')

@section('title', 'Business and Leadership Books | Tipoff')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Books</div>

                    <div class="panel-body">
                        @foreach ($books as $book)
                            <article>
                                <h4><a href="{{ $book->path() }}">{{ $book->title }}</a></h4>
                            </article>

                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
