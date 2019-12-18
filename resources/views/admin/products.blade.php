@extends('layouts.lay')

@section('content')
<div class="form-cont">
      <div class="admin-agregar">
        <a href="/admin/addProduct" class="">Agregar nuevo</a>
      </div>
      <div class="header-listado">
        <form class="buscador-listado" action="" method="GET">
          <div class="">
            <input type="text" name="s" value="">
            <button type="submit">Buscar</button>
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
          <article class="listado-productos">
            <div class="producto-lista">
              <div class="producto-detalle">
                <i>ID</i>: 1<br>
                <i>Nombre</i>: nombre <br>
                <i>Precio</i>: $precio <br>
              </div>
              <div class="producto-imagen">
                <a href="producto.php?id=">
                  <img src="" alt="">
                </a>
              </div>
            </div>
            <div class="producto-botones">
              <a href=""><i class="material-icons">edit</i></a>
              <a href=""><i class="material-icons">delete_forever</i></a>
            </div>
          </article>
      </section>
    </div>
@endsection
