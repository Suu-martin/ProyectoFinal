@extends('layouts.lay')

@section('content')
    <div class="form-register">

          <h4>Reset Password</h4>
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
          <form method="POST" action="{{ route('password.email') }}">
              @csrf
              <input id="email" type="email" class="controls" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            <input  class="botons" type="submit" value="Send Password Reset Link">
          </form>
    </div>
@endsection
