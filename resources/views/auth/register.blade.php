@extends('layouts.gentelella-auth')
@section('title') Crear cuenta   @endsection
@section('register')
    <form method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <h1>Crear Cuenta</h1>
         <div class="form-group{{ $errors->has('CodUser') ? ' has-error' : '' }}">
            <input type="text" id="CodUser" type="text" name="CodUser" class="form-control"
                   value="{{ old('CodUser') }}"
                   placeholder="Código de usuario" required=""/>
            @if ($errors->has('CodUser'))
                <span class="help-block">
                    <strong>{{ $errors->first('CodUser') }}</strong>
                </span>
            @endif
        </div>

         <div class="form-group{{ $errors->has('DNI') ? ' has-error' : '' }}">
            <input type="text" id="DNI" type="text" name="DNI" class="form-control"
                   value="{{ old('DNI') }}"
                   placeholder="DNI" required=""/>
            @if ($errors->has('DNI'))
                <span class="help-block">
                    <strong>{{ $errors->first('DNI') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <input type="text" id="name" type="text" name="name" class="form-control"
                   value="{{ old('name') }}"
                   placeholder="Name" required=""/>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email"  class="form-control"
                   name="email"  value="{{ old('email') }}"
                   placeholder="Email" required=""/>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                 </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <input type="password" class="form-control" name="password"
                   placeholder="Password" required=""/>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control"
                   placeholder="Confirm Password"
                   name="password_confirmation" required>
        </div>
         <div class="form-group{{ $errors->has('CodUserType') ? ' has-error' : '' }}">
            <input type="text" id="CodUserType" type="text" name="CodUserType" class="form-control"
                   value="{{ old('CodUserType') }}"
                   placeholder="Cod Tipo" required=""/>
            @if ($errors->has('CodUserType'))
                <span class="help-block">
                    <strong>{{ $errors->first('CodUserType') }}</strong>
                </span>
            @endif
        </div>
        <div>
            <button class="btn btn-default submit" type="submit">Guardar</button>
        </div>

        <div class="clearfix"></div>

        <div class="separator">
            <p class="change_link">Ya estas registrado ?
                <a href="{{route('login')}}" class="to_register"> Log in </a>
            </p>

            <div class="clearfix"></div>
            <br/>

            <div>
                <h1><i class="fa fa-paw"></i> SIGA </h1>
               
            </div>
        </div>
    </form>
@endsection



