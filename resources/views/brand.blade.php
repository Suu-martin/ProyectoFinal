@extends('layouts.lay')

@section('content')

  <body>
    <header>
      @extends('layouts.menu')
    </header>
    <div class="faq-background">
      <h4 class="faq">Brands</h4>
      <ul class="ask">
        @foreach ($brands as $brand)
        <li class="brand" style="color:white">{{$brand->name}}</li>
      @endforeach
      </ul>
  </div>

@endsection
