@extends('layouts.lay')
@section('content')
  <body>
    <header>
      @extends('layouts.menu')
    </header>
    <div class="faq-background">
      <h4 class="faq">Frequently Asked Questions</h4>
      <h5>Your selection: </h5><p class="faq-titulo">{{$faq->question}}</p>
      <div class="ans">
        <p>{{$faq->answer}}</p>
      </div>
      <form class="" action="/deleteFaq" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$faq->id}}">
        <div class="boton edit-faq">
          <a href="/deleteFaq"><button class="boton1" type="submit" name="button" value="delete">Delete</button></a>
        </div>
      </form>
    </div>

@endsection
