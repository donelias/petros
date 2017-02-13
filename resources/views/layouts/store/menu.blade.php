
    {{--
    @foreach ($items as $route => $text)
    <li role="presentation" {!! Html::classes(['active' => Route::is($route)]) !!}>
    <a href="{{ route($route) }}">{{ $text }}</a>
    </li>
    @endforeach
    --}}



    <li @if(Route::is('inicio')) class="active" @endif>
        <a href="{{route('inicio')}}">
            Inicio
        </a>
    </li>
    <li @if(Route::is('menu')) class="active" @endif>
        <a href="{{route('menu')}}">
            Menu
        </a>
    </li>
    <li @if(Route::is('cart-show')) class="active" @endif>
        <a href="{{route('cart-show')}}">
            <i class="fa fa-shopping-cart fa-2x"></i>
        </a>
    </li>
    <li @if(Route::is('about')) class="active" @endif>
        <a href="{{route('about')}}">
            Conocenos
        </a>
    </li>
    <li @if(Route::is('contact')) class="active" @endif>
        <a href="{{route('contact')}}">
            Contactos
        </a>
    </li>

