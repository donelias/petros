<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {!! link_to('admin/home', "FiSO", $attributes = array('class' => 'navbar-brand main-title')) !!}
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text"><i class="fa fa-dashboard"></i> Dashboard</p>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('category.index') }}">Categorias</a></li>
        <li><a href="{{ route('product.index') }}">Productos</a></li>
        <li><a href="#">Pedidos</a></li>
        <li><a href="#">Usuarios</a></li>
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
      </ul>
    </div>
  </div>
</nav>