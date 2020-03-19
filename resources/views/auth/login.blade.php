@extends('layouts.gentelella-auth')
@section('title') Iniciar Sesión  @endsection

@section('login')
    <form class="form" action="{{ route('login') }}" method="POST">

        <h1>Iniciar Sesión</h1>
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" name="email" class="form-control " value="{{ old('email') }}"
                   placeholder="Email" required=""/>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password"
                   required=""/>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div>
            <button class="btn btn-default submit" type="submit">Ingresar</button>

        </div>
        <a class="reset_pass" href="{{ route('password.request') }}">Olvidaste tu contraseña?</a>
        <div class="clearfix"></div>

        <div class="separator">
            <p class="change_link">New to site?
                <a href="{{route('register')}}" class="to_register"> Crear Cuenta </a>
            </p>

            <div class="clearfix"></div>
            <br />

            <div>
                <h1><i class="fa fa-paw"></i> SIGA</h1>
                
            </div>
        </div>
    </form>

@endsection

