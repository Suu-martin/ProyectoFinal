@extends('layouts.lay')

@section('content')

<ul class="item-cart-ul">
  @forelse ($cart as $item)
			   <li class="item-cart-li">
				  <div class="item-cart">
					  <a href="producto.php?id=">
					<img src="img/productos/" alt="" class="item-cart-img"></a>
					<div class="Cart-descripcion">
					  <h3>Name</h3>
					  <h5>$price</h5>
						<form action="" method="post">
  						<input value="1" name="ID" style="display: none">
  	  				<button type="submit" name="button" value="add" class="cart-btn">+</button>
  						<button type="submit" name="button" value="nothing" class="cart-btn disabled" disabled>+</button>
  						<input type="number" value="9" class="cart-input" disabled>
  						<button type="submit" name="button" value="substract" class="cart-btn">-</button>
  			  		<button type="submit" name="button" value="nothing" class="cart-btn disabled" disabled>-</button>
  						<button type="submit" name="button" value="remove" class="cart-btn red">X</button>
						</form>
					</div>
				  </div>
				  <hr class="line">
				</li>
  @empty
    <div class="error">
      <h6>Aun no tienes productos en tu carrito! <b><a href="/">Redireccionando a Home (Click aqui si no eres redireccionado automaticamente)</a></b></h6>
    </div>
    <script>
       setTimeout(function(){
       window.location = "/";
     }, 3000);
     </script>
    @endforelse
		  <h5 class="add-cart finish-cart">Checkout</h5>
		</ul>
@endsection
