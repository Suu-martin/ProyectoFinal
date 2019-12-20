@extends('layouts.lay')

@section('content')
  <div class="product-container">
          <div class="producto">
            <img src="/storage/products/{{$datos->image}}" alt="" class="img-producto">
          </div>
          <div class="descripcion-producto">
            <h2>{{$datos->name}} - <i> {{$datos->brand->name}}</i></h2>
            <p class="">
              {{$datos->description}}
            </p>
  			<h4><i class="stock">Stock: {{($datos->stock > 0) ? "Disponible $datos->stock unidades" : "No disponible"}}</i></h4>
            <h3 class="price">
              ${{$datos->price}}
            </h3>

    				  <button type="submit" class="add-cart" {{($datos->stock == 0) ? 'disabled style=background-color:gray;' : ""}}
                {{($datos->stock == 0) ?"" : "onclick=addToCart(this,$datos->id)"}}>
            			Add to cart
    				  </button>
    			  </form>
          </div>

        </div>

@endsection
