@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Book Topics</div>

                    <div class="panel-body">
                        @foreach ($booktopics as $booktopic)
                            <article>
                                <div class="body"><a href="{{ $booktopic->path() }}">{{ $booktopic->title }}</a></div>
                            </article>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection