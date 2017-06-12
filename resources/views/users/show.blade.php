@extends('layouts.app')

@section('title', $user->display_name .' | Tipoff')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $user->display_name }} Profile</div>
                    <div class="panel-body">
                        {{ $user->display_name }}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection