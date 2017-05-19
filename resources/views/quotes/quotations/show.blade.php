@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ $quote->author->path() }}">Quote from {{ $quote->author->display_name }}</a>
                        
                    </div>

                    <div class="panel-body">
                        {{ $quote->quote_text }}
                    </div>
                </div>
            </div>
        </div>

        @if (auth()->check())
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <form method="POST" action="{{ $quote->path() . '/comments' }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <textarea name="body" id="body" class="form-control" placeholder="Have something to say?" rows="5"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-default">Post</button>
                    </form>
                </div>
            </div>
        @else
            <p class="text-center">Please <a href="{{ route('login') }}">sign in</a> to participate in this discussion.</p>
        @endif
    </div>
@endsection