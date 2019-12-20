@extends('layouts.lay')

@section('content')
    <div class="form-cont">
      <form class="" action=" {{"/addFaq"}}" method="post">
      @csrf
      <h4 class="faq">Frequently Asked Questions</h4>
      <dl class="askfq">
        <input id="question" name="question" class="controls" type="text" placeholder="Write your question here!" value="{{ old('question') }}">
        @error('question')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </dl>
      <dl class="askfq">
        <input id="answer" name="answer" class="controls" type="text" placeholder="Write your answer here!" value="{{ old('answer')}}">
        @error('answer')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </dl>
        <a href="/deleteFaq"><button class="botons" type="submit" name="button" value="save">Save</button></a>
    </form>
  </div>
@endsection
