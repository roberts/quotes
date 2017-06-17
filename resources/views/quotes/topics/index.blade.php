@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Quote Topics</div>

                    <div class="panel-body">
                        @foreach ($quotetopics as $quotetopic)
                            <article>
                                <div class="body"><a href="{{ $quotetopic->path() }}">{{ $quotetopic->title }}</a></div>
                            </article>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection