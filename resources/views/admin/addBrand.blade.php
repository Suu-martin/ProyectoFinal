@extends('layouts.lay')

@section('content')
    <div class="form-cont">
      <form class="" action=" {{"/admin/addBrand"}}" method="post">
      @csrf
      <h4 class="faq">Add brand</h4>
      <dl class="askfq">
        <input id="name" name="name" class="controls" type="text" placeholder="Write your new brand here!" value="{{ old('brand') }}">
        @error('brand')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </dl>
        <a href="/admin/addBrand"><button class="botons" type="submit" name="button" value="save">Save</button></a>
    </form>
  </div>
@endsection
