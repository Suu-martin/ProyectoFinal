@extends('layouts.lay')

@section('content')

  <main>
    <div class="form-register">
        <h4>Edit my profile</h4>
    <form class="editForm" action="/editProfile" method="post" enctype="multipart/form-data">
      @csrf
      <div class="avatarForm">
          <label for="avatar"><img class="round-img" src="/storage/avatares/{{ Auth::user()->avatar }}" alt="foto de perfil" ></label>
          <input type="file" name="avatar" id="avatar">
      </div>
      <div class="inputsForm">
        <input type="text" name="id" value="{{ Auth::user()->id }}" hidden style="display=none">
      <div class="error-reg">
        @error('avatar')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
       @enderror
     </div>
        <input class="controls" type="text" name="name" placeholder="Name *" value="{{ Auth::user()->name }}">
      <div class="error-reg">
        @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
       @enderror
      </div>
        <input class="controls" type="password" name="oldPassword" placeholder="Old password for save changes">
          @if($errors->any())

           @endif
           @if (\Session::has('error'))
             <span class="invalid-feedback" role="alert">
              <strong>{!! \Session::get('error') !!}</strong>
            </span>
        @endif
        <input class="controls" type="password" name="password" placeholder="New password (optional)">
        <input class="controls" type="password" name="password_confirmation" placeholder="Confirm new password">
        @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
       @enderror
      </div>
        <input  class="botons" type="submit" value="Save">
    </form>
    </div>
  </main>

@endsection
