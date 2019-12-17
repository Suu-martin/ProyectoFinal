@extends('layouts.lay')

@section('content')
      <div class="profile">
        <h2 >My Profile</h2>
        <div class="perfilBasico">
          <img src="/storage/{{ Auth::user()->avatar}}" alt="foto de perfil" class="foto-perfil">
          <div class="user-datos">
            <h2 class="NombreC">{{ Auth::user()->name }}</h2>
            <h4 class="emailU">{{ Auth::user()->email }}</h4>
            <div class="boton">
              <a href="/editProfile/{{ Auth::user()->id }}"><button class="boton1" type="button" name="button">Edit</button></a>
            </div>
          </div>
        </div>
        <div class="user-settings">
          <div class="tarjetas">
            <h2 class="tarjetaCred">Credit Cards</h2>
            <img src="img/tarjeta.jpg" alt="">
            <p>Securely save your card details and expedite the payment of your next purchase.</p>
            <button class="boton2" type="button" name="button">Add</button>
          </div>
          <div class="facturacion">
            <h2 class="factura">Billing</h2>
            <img src="img/factura.jpeg" alt="factura">
            <p>Complete your billing information and expedite the payment of your next purchase.</p>
            <button class="boton3" type="button" name="button">Add</button>
          </div>
        </div>
      </div>
@endsection
