@extends('layouts.lay')

@section('content')
    <div class="form-cont">
      <form class="" action=" {{"/admin/addCategory"}}" method="post">
      @csrf
      <h4 class="faq">Add category</h4>
      <dl class="askfq">
        <input id="name" name="name" class="controls" type="text" placeholder="Write your new category here!" value="{{ old('category') }}">
        @error('category')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </dl>
        <a href="/admin/addCategory"><button class="botons" type="submit" name="button" value="save">Save</button></a>
    </form>
  </div>
@endsection
