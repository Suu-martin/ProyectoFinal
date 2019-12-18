@extends('layouts.lay')

@section('content')
      <div class="header-listado margin-l-r">
        <form class="buscador-listado" action="" method="GET">
          <div class="">
            <input type="text" name="s" value="" placeholder="Buscar">
            <button type="submit">Buscar</button>
          </div>
        </form>
        <div class="paginador">
            {{$datos->links()}}
        </div>
      </div>
      <section class="articulos">
      @forelse ($datos as $dato)
        <article class="articulo">
          <a href="/product/{{$dato->id}}">
          <div class="articulo-imagen">
            <img src="/storage/products/{{ $dato->image }}" alt="" class="img-article">
            <div class="cart">
               <a href="cart.php?add={{ $dato->id }}"><i class="material-icons">add_shopping_cart</i></a>
            </div>
          </div>
          <div class="article-footer">
            <h4>{{ $dato->name }}</h4>
            <h4>${{ $dato->price }}</h4>
          </div>
        </a>
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
@endsection
