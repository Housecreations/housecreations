@extends('layouts.app-other')
@section('title', 'Iniciar sesión')
@section('content')
<section class="slide story background">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Login</h4></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-md-3"></div>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" placeholder="Correo electrónico" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-md-3"></div>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="**********" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                       <div class="col-md-1"></div>
                            <div class="col-md-6">
                                
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recordarme
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                           <div class="col-md-2"></div>
                            <div class="col-md-8">
                                 {!! Form::submit('Iniciar Sesión', ['class' => 'button'])!!}

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                    ¿Olvidaste tu contraseña?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
