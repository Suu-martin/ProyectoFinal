@extends('layouts.lay')

@section('content')
  <body>
  <div class="container">
    <header>
      @extends('layouts.menu')
    </header>
      <div class="profile">
        <h2 >Mi Perfil</h2>
        <div class="perfilBasico">
          <img src="img/avatares" alt="foto de perfil" class="foto-perfil">
          <div class="user-datos">
            <h2 class="NombreC">{{ Auth::user()->name }}</h2>
            <h4 class="emailU">{{ Auth::user()->email }}</h4>
            <div class="boton">

              <a href="/editProfile"><button class="boton1" type="button" name="button">Editar</button></a>

            </div>
          </div>
        </div>
        <div class="user-settings">
          <div class="tarjetas">
            <h2 class="tarjetaCred">Tarjetas de Crédito</h2>
            <img src="img/tarjeta.jpg" alt="">
            <p>Guardá de manera segura los datos de tu tarjeta y agilizá el pago de tu próxima compra.</p>
            <button class="boton2" type="button" name="button">Agregar</button>
          </div>
          <div class="facturacion">
            <h2 class="factura">Facturación</h2>
            <img src="img/factura.jpeg" alt="factura">
            <p>Completá tus datos de facturación y agilizá el pago de tu próxima compra.</p>
            <button class="boton3" type="button" name="button">Agregar</button>
          </div>
        </div>
      </div>
@endsection
