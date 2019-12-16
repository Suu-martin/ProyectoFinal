
<nav>
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
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        </nav>
