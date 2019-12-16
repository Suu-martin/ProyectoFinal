@extends('layouts.lay')

@section('content')
  <body>
    <header>
      @extends('layouts.menu')
    </header>

    <div class="faq-background">
      <form class="" action=" {{"/addFaq"}}" method="post">
      @csrf
      <h4 class="faq">Frequently Asked Questions</h4>
      <dl class="ask">
        <label for="question" style="color:white" >Question</label>
        <input style="height:30px" class="esp" id="question" name="question" class="form-control" type="text" placeholder="Write your question here!" value="{{ old('question') }}">
        @error('question')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </dl>
      <dl class="ask">
        <label for="answer" style="color:white">Answer</label>
        <input style="height:30px" class="esp" id="answer" name="answer" class="form-control" type="text" placeholder="Write your answer here!" value="{{ old('answer')}}">
        @error('answer')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </dl>
      <div class="boton edit-faq">
        <a href="/deleteFaq"><button class="boton1" type="submit" name="button" value="save">Save</button></a>
      </div>
    </form>

@endsection
