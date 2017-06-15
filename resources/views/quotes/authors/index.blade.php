@extends('layouts.app')

@section('title', 'Business and Leadership Quote Authors | Tipoff')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Authors</div>

                    <div class="panel-body">
                        @foreach ($quoteauthors as $quoteauthor)
                            <article>
                                <div class="body"><a href="{{ $quoteauthor->path() }}">{{ $quoteauthor->display_name }}</a></div>
                            </article>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
