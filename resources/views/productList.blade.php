@extends('layouts.lay')

@section('content')
      <div class="faq-background">
        <h4 class="faq">Product list: </h4>
        <ul class="ask">
          @foreach ($datos as $dato)
            <article class="articulo">
              <form class="" action="/product" method="post">
                <input type="hidden" name="id" value="{{$dato->id}}">
                  <a href="/product">
                    <div class="articulo-imagen">
                      <img src="img/productos/{{ $dato->image }}" alt="" class="img-article">
                    </div>
                    <div class="article-footer">
                      <h4>{{ $dato->name }}</h4> - <h4>{{ $dato->price }}</h4>
                    </div>
                  </a>
              </form>
            </article>
            @if(Auth::user()->admin == 1)
            <form class="" action="/productList" method="post">
              @csrf
              <input type="hidden" name="id" value="{{$dato->id}}">
              <div class="boton edit-faq">
                <a href="/deleteFaq"><button class="boton1" type="submit" name="button" value="delete">Delete</button></a>
              </div>
            </form>
            @endif
          @endforeach
        </ul>
        @if(Auth::user()->admin == 1)
        <div class="boton edit-faq">
          <a href="/addProduct"><button class="boton1" type="button" name="button">Add</button></a>
        </div>
      @endif
    </div>

@endsection
