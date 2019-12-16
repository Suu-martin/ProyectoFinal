@extends('layouts.lay')

@section('content')
    <main>
      <div class="header-listado margin-l-r">
        <form class="buscador-listado" action="" method="GET">
          @csrf
          <div class="">
            <input type="text" name="s" value="" placeholder="Buscar">
            <button type="submit">Buscar</button>
          </div>
        </form>
        <div class="paginador">
          <nav>
            {{$datos->links()}}
          </nav>
        </div>
      </div>
      <section class="articulos">
      @forelse ($datos as $dato)
        <article class="articulo">
          <form class="" action="/product" method="post">
            <input type="hidden" name="id" value="{{$dato->id}}">
              <a href="/product">
                <div class="articulo-imagen">
                  <img src="img/productos/{{ $dato->image }}" alt="" class="img-article">
                  <div class="cart">
                    <a href="/cart"><i class="material-icons">add_shopping_cart</i></a>
                  </div>
                </div>
                <div class="article-footer">
                  <h4>{{ $dato->name }}</h4>
                  <h4>{{ $dato->price }}</h4>
                </div>
              </a>
          </form>
        </article>
      @empty
        <div class="">
          Aun no hay datos
        </div>
      @endforelse
      </section>
      <div class="desc">
        <h2>Descripción general del proyecto</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
    </main>
    @if(Auth::user() !== null)
    <div class="boton edit-faq">
      <a href="/productList"><button class="boton1" type="button" name="button">Edit List</button></a>
    </div>
  @endif
@endsection
