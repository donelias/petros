@extends('layouts.store.template')

@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
            <div class="row" style="margin-top:20px">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <fieldset>
                            <h2>Inicio de Sesion</h2>
                            <hr class="colorgraph">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                
                                <input id="email" type="email" class="form-control input-lg" name="email" value="{{ old('email') }}" placeholder="Correo Electronico" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                
                                <input id="password" type="password" class="form-control input-lg" name="password" placeholder="Contraseña" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <span class="button-checkbox">
                                <button type="button" class="btn" data-color="info">Remember Me</button>
                                <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
                                <a href="{{ url('/password/reset') }}" class="btn btn-link pull-right">Olvido su Contraseña?</a>
                            </span>
                            <hr class="colorgraph">
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <input type="submit" class="btn btn-lg btn-success btn-block" value="Iniciar">
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <a href="{{ url('/register') }}" class="btn btn-lg btn-primary btn-block"> Registrarse </a>
                                    

                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
</div>


<br>
<br>
<br>
@endsection
