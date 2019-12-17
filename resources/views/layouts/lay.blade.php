
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Manjari|Pacifico|Roboto+Slab&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="/css/styles.css">
  <script src="/js/functions.js"></script>
  <title>MyEcommerce</title>
</head>
<body>


 {{--  <nav>
    <h1 class="titulo"><a href="/home">My e-commerce</a></h1>
    <ul class="header-nav">
      <li><a href="/faq">F.A.Q</a></li>
      <li><a href="/contact">Contact</a></li>
      <li><a href="/cart">Cart</a></li>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
        </ul>
        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/profile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                             {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
          @endguest
        </ul>
      </div>
    </ul>
    <div class="hamb">
      <a id="hamb" onclick="show()"><ion-icon name="menu"></ion-icon></a>
    </div>
    <div class="botonera" id="menu" style="display: none;">
      <a href="/login"><ion-icon name="log-in"></ion-icon></a>
      <a href="/profile"><ion-icon name="person"></ion-icon></a>
      <a href="/logout"><ion-icon name="log-out"></ion-icon></a>
      <a href="/faq"><ion-icon name="help"></ion-icon></a>
      <a href="/contact" class="footer-boton"><ion-icon name="paper-plane"></ion-icon></a>
      <a href="/cart" class="footer-boton"><ion-icon name="cart"></ion-icon></a>
    </div>
  </nav> --}}

  <div class="container">
  <header>
  <nav>
          <h1 class="titulo"><a href="/">My e-commerce</a></h1>
          <ul class="header-nav">
              <li><a href="/faq">F.A.Q</a></li>
              <li><a href="/contact">Contact</a></li>
              <li><a href="/cart">Cart</a></li>
             @guest
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
            <li>
           <div class="log-profile">

                <a class="" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
                <a id="navbarDropdown" class="" href="/profile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  <img src="/storage/{{ Auth::user()->avatar }}" alt="" width="45" height="45" class="rounded-circle">
                </a>
          </div>
          </li>
          @endguest
          </ul>
          <div class="hamb">
            <a id="hamb" onclick="show()"><ion-icon name="menu"></ion-icon></a>
          </div>
          <div class="botonera" id="menu" style="display: none;">
              <a href="login.php"><ion-icon name="log-in"></ion-icon></a>
                <a href="profile.php"><ion-icon name="person"></ion-icon></a>
              <a href="logout.php"><ion-icon name="log-out"></ion-icon></a>
              <a href="faq.php"><ion-icon name="help"></ion-icon></a>
              <a href="contact.php" class="footer-boton"><ion-icon name="paper-plane"></ion-icon></a>
              <a href="cart.php" class="footer-boton"><ion-icon name="cart"></ion-icon></a>
          </div>
        </nav>
  </header>
  <main>
    @yield('content')
  </main>

  </div>
  <footer>
    <div class="footer">
      <h2>Where we are?</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.3309486515113!2d-58.3815952!3d-34.621076099999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ea8781cb%3A0xb791570f7236c962!2sDigital%20House!5e0!3m2!1ses-419!2sar!4v1567891532406!5m2!1ses-419!2sar" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" class="mapa"></iframe>
      <div class="pie-pagina">
        <h2>Contact:</h2>
        <ul class="footer-ul">
          <li>
            <a href="https://www.facebook.com/digitalhouse.edu/" class="footer-boton">
              <ion-icon name="logo-facebook"></ion-icon>
              <h2>Facebook</h2>
            </a>
          </li>
          <li>
            <a href="https://www.instagram.com/_digitalhouse/" class="footer-boton">
              <ion-icon name="logo-instagram"></ion-icon>
              <h2>Instagram</h2>
            </a>
          </li>
          <li>
            <a href="mailto:usuario@digitalhouse.com" class="footer-boton">
              <ion-icon name="mail"></ion-icon>
              <h2>e-Mail</h2>
            </a>
          </li>
          <li>
            <a href="tel:1128535609" class="footer-boton">
              <ion-icon name="call"></ion-icon>
              <h2>Phone</h2>
            </a>
          </li>
          <li>
            <a href="/contact" class="footer-boton">
              <ion-icon name="paper-plane"></ion-icon>
              <h2>Contact</h2>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>
