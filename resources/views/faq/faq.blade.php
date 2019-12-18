@extends('layouts.lay')

@section('content')
  <div class="faq-background">
    <h4 class="faq">Frequently Asked Questions</h4>
    <ul class="ask">
      @forelse ($faqs as $faq)
      <li class="faq-li">
        <div class="faq-titulo">
          {{$faq->question}}
        </div>
        <div class="ans">
          {{$faq->answer}}
        </div>
      </li>
       @empty
         <div>There is nothing</div>
       @endforelse
    </ul>
  </div>
@endsection
