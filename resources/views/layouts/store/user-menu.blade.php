@if(Auth::check())
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
  @else
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i> <span class="caret"></span></a>
    <ul class="dropdown-menu" role="menu">
      <li><a href=""> Iniciar Sesion</a></li>
    </ul>
  </li>
  @endif