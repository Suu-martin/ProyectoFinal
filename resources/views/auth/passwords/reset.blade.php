@extends('layouts.lay')

@section('content')
    <div class="form-register">

          <h4>Reset Password</h4>
          <form method="POST" action="{{ route('password.update') }}">
              @csrf
              <input type="hidden" name="token" value="{{ $token }}">
              <input id="email" type="email" class="controls" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <input id="password" type="password" class="controls" placeholder="Password" name="password" required autocomplete="new-password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <input id="password-confirm" type="password" class="controls" placeholder="Password Confirm" name="password_confirmation" required autocomplete="new-password">
            <input  class="botons" type="submit" value="Reset Password">
          </form>
    </div>
@endsection
