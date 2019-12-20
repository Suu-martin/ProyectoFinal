@extends('layouts.lay')

@section('content')

<ul class="item-cart-ul">
  @forelse ($cart as $item)
			   <li class="item-cart-li">
				  <div class="item-cart">
					  <a href="/product/{{ $item["item"]->id }}">
					<img src="/storage/products/{{ $item["item"]->image }}" alt="" class="item-cart-img"></a>
					<div class="Cart-descripcion">
					  <h3>{{ $item["item"]->name }}</h3>
					  <h5>${{ $item["item"]->price }}</h5>
	  				<button class="cart-btn {{($item["item"]->stock == $item["cant"]) ? "disabled" : ""}}"  onclick="addToCart(this,{{ $item["item"]->id }})">+</button>
						<input type="number" value="{{ $item["cant"] }}" class="cart-input" disabled id="cant-cart-{{ $item["item"]->id }}">
						<button class="cart-btn {{($item["cant"]== 1) ? "disabled" : ""}}"   onclick="remFromCart(this,{{ $item["item"]->id }})">-</button>
						<a href="/cart/remove/{{ $item["item"]->id }}">
            <button class="cart-btn red">X</button></a>
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
