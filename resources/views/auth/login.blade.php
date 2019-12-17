@extends('layouts.lay')

@section('content')
  <div class="form-login">
            <h4>Log In</h4>
            <form method="POST" action="{{ route('login') }}">
                @csrf
              <input id="email" type="email" class="controls" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              <input id="password" type="password" class="controls" name="password" required autocomplete="current-password">

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <div class="ph">
                  <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                      {{ __('Remember Me') }}
                  </label>
              </div>
              <button type="submit" class="botons">
                  {{ __('Login') }}
              </button>

              @if (Route::has('password.request'))
                  <p><a class="btn btn-link" href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                  </a></p>
              @endif
            </form>
            <p><a href="/register"> You don't have an account?</a></p>
    </div>


@endsection
