@extends('layouts.app')

@section('title', 'Register for the Tipoff Project')

@section('description', 'Tipoff Project provides resources for business and leadership: articles, quotes, books, interviews, and other material to grow entreprenuers and leaders.')

@section('featured_image', 'https://tipoff.com/ogimage.jpg')

@section('content')
<div class="mdl-card-square mdl-card mdl-shadow--2dp">
    <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Registration</h2>
    </div>
    <div class="mdl-card__supporting-text {{ $errors->has('name') ? ' has-error' : '' }}">
    <form role="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="first_name" value="{{ old('first_name') }}" required>
          <label class="mdl-textfield__label" for="first_name">First Name</label>
      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="last_name" value="{{ old('last_name') }}" required>
          <label class="mdl-textfield__label" for="last_name">Last Name</label>
      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" id="email" type="email" name="email" value="{{ old('email') }}" required>
          <label class="mdl-textfield__label" for="email">Email</label>
      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" id="password" type="password" name="password" required>
          <label class="mdl-textfield__label" for="password">Password</label>
      </div>
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" id="password-confirm" type="password" name="password_confirmation" required>
          <label class="mdl-textfield__label" for="password-confirm">Retype   Password</label>
      </div>
      <div class="mdl-card__actions mdl-card--border">
      <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
      Register
      </button>
    </form>
    </div>
</div>
@endsection
