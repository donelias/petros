<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="{{url('/')}}"><img src="images/logo3.png" alt="logo"></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right">
                 {{-- <li ><a href="{{route('cart-show')}}"><i class="fa fa-shopping-cart fa-2x"></i></a></li>
                 <li ><a href="{{route('menu')}}">Menu</a></li>
                 <li ><a href="{{url('about')}}">Conocenos</a></li>
                 <li ><a href="{{url('contact')}}">Contactos</a></li>--}}
                 {!! Html::menu('petros.menu') !!}
                  <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li @if(Route::is('login')) class="active" @endif><a href="{{ url('login') }}"><i class="fa fa-sign-in"></i> Iniciar</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Hola! {{ Auth::user()->name }} <i class="fa fa-user"></i> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="fa fa-sign-out" aria-hidden="true"></i> Salir
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
              </ul>
            </div>
            <!-- #Nav Ends -->
          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->

