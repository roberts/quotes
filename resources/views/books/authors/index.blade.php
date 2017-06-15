@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Books</div>

                    <div class="panel-body">
                        @foreach ($bookauthors as $bookauthor)
                            <article>
                                <div class="body"><a href="{{ $bookauthor->path() }}">{{ $bookauthor->display_name }}</a></div>
                            </article>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
