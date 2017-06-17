@extends('layouts.app')

@section('title', 'Collections | Tipoff')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Collections</div>
                    <div class="panel-body">
                        @foreach ($collections as $collection)
                            <article>
                                <h4><a href="{{ $collection->path() }}">{{ $collection->title }}</a></h4>
                            </article>

                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection