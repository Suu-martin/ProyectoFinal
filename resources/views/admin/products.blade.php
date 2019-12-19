@extends('layouts.lay')

@section('content')
<div class="form-cont">
      <div class="admin-agregar">
        <a href="/admin/addProduct" class="">Add new</a>
      </div>
      <div class="header-listado">
        <form class="buscador-listado" action="" method="GET">
          <div class="">
            <input type="text" name="s" value="">
            <button type="submit">Search</button>
          </div>
        </form>
        <div class="paginador">
          <ul>
              <li ><a href=""><i class="material-icons">chevron_left</i></a></li>
              <li><a class="active" href="">1</a></li>
              <li><a href="">2</a></li>
              <li ><a href=""><i class="material-icons">chevron_right</i></a></li>
            </ul>
          </div>
      </div>
      <section class="seccion-listado">
        @forelse ($datos as $dato)
          <article class="listado-productos">
            <div class="producto-lista">
              <div class="producto-detalle">
                <i>ID</i>:{{ $dato->id }}<br>
                <i>Nombre</i>:{{ $dato->name }} <br>
                <i>Precio</i>: ${{ $dato->price }}<br>
              </div>
              <div class="producto-imagen">
                <a href="producto.php?id=">
                  <img src="/storage/products/{{ $dato->image }}" alt="">
                </a>
              </div>
            </div>
            <div class="producto-botones">
              <a href="/admin/editProduct/{{ $dato->id }}"><i class="material-icons">edit</i></a>
              <a href="/admin/products/{{ $dato->id }}"><i class="material-icons">delete_forever</i></a>
            </div>
          </article>
        @empty
        @endforelse
      </section>
    </div>
@endsection
