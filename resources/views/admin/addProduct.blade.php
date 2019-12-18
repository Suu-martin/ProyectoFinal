@extends('layouts.lay')

@section('content')
  <div class="form-cont">
        <h4>Agregar producto</h4>
        <form class="" action="" method="post" enctype="multipart/form-data">
          <input class="controls" type="text"  name="nombre" placeholder="Nombre *" value="" >
          <input class="controls" type="number" name="precio" placeholder="Precio *" value="" >
          <div class="marca-categoria">
            <div class="">
              <div> <label for="marca">Marca:</label> </div>
              <select class="selector" name="marca"  >
                  <option value="">Marca</option>
                <option value="0">Agregar marca</option>
              </select>
              <input type="text" class="option-selector" name="addMarc" value="" placeholder="Selecciona agregar!">
            </div>
            <div class="">
              <div> <label for="categoria">Categoria:</label> </div>
              <select class="selector" name="categoria" >
                  <option value="">Categoria</option>
                <option value="0">Agregar categoria</option>
              </select>
              <input type="text" class="option-selector" name="addCat" value="" placeholder="Selecciona agregar!">
            </div>
          </div>
          <textarea class="controls" name="descripcion" rows="3" cols="20" placeholder="Descripción *" ></textarea>
          <input class="controls" type="text" name="stock" placeholder="Stock *" >
          <div> <label for="avatar">Imagen (No opcional)</label> </div>
          <input class="controls" type="file" name="imagen" id="avatar" accept="image/jpeg,image/jpg,image/png"  >
          <input  class="botons" type="submit" value="Agregar">
        </form>
      </div>
@endsection
