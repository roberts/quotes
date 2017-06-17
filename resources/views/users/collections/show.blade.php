@extends('layouts.app')

@section('title', $collection->title .' | Tipoff')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $collection->title }}</div>
                    <div class="panel-body">
                        Created by {{ $collection->creator->display_name }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection