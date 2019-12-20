@extends('layouts.lay')

@section('content')
<div class="form-register">
          <h4>Registration Form</h4>
          <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" id="register-form" >
            @csrf
            <input id="name" type="text" class="controls" name="name" value="{{ old('name') }}" placeholder="Name *" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input id="email" type="email" class="controls" placeholder="Email *" name="email" value="{{ old('email') }}" required autocomplete="newEmail">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input id="password" type="password" class="controls" name="password" placeholder="Password *" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input id="password-confirm" type="password" class="controls" name="password_confirmation" placeholder="Confirm password *"  required autocomplete="new-password">
            <input id="avatar" type="file" class="controls" name="avatar" value="" accept="image/jpeg,image/jpg,image/png">
                @error('avatar')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <div class="ph">
              <input type="checkbox" name="tyc" id="tyc" required>
              <label for="tyc"> I agree <a href="#"></label>Terms and conditions</a>
            </div>
            @error('tyc')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <input  class="botons" type="submit" value="Sign In">
          </form>
        <div class="ph">
            <a href="login.php">You already have an account?</a>
        </div>
    </div>
@endsection
