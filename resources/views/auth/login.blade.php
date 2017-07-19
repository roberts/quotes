@extends('layouts.app')

@section('title', 'Login to the Tipoff Project')

@section('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')

@section('featured_image', 'https://tipoff.com/ogimage.jpg')

@section('content')
    <div class="image" style="background-color:#D32F2F; background-image: url('/red-einstein.jpg')"></div>

    <div class="pre">
      <div>Tipoff Project</div>
      <div class="title">Login</div>
    </div>

    <section class="main" style="padding: auto;">
        <div style="width: 300px; margin: 0 auto;">
            <div style="width: 204px; margin: 0 auto;">
                <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="/register">Need to Register first?</a>
            </div>
            <br>
            <form style="margin:auto;" role="form" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" id="email" type="email" name="email" value="{{ old('email') }}" autofocus>
                    <label class="mdl-textfield__label" for="email">Email Address</label>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <br>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" id="password" type="password" name="password">
                    <label class="mdl-textfield__label" for="password">Password</label>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <br>
                <div class="form-group">
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="remember">
                      <input type="checkbox" id="remember" class="mdl-checkbox__input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                      <span class="mdl-checkbox__label">Remember</span>
                    </label>
                </div>
                <br>
                <div class="form-group" style="width: 75px; margin: 0 auto;">
                    <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Login</button>
                </div>
                <br>
                <div style="width: 210px; margin: 0 auto;">
                    <a class="mdl-button mdl-js-button mdl-js-ripple-effect" href="{{ route('password.request') }}">Forgot Your Password?</a>
                </div>
            </form>
            <br>
            <br>
        </div>
    </section>

@endsection