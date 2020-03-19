@extends('layouts.gentelella')
@section('title') Crear usuario @endsection

@section('content')

<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Crear usuario <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                    </ul>
        <div class="clearfix"></div>
            </div>
                <div class="x_content">
<form class="form-horizontal form-label-left" novalidate=""  action="{{ route('users.index') }}">

{{ csrf_field()  }}

<span class="section">Datos del usuario</span>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="DNI">DNI: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('dni') }}" id="DNI" class="form-control col-md-7 col-xs-12"  name="dni" placeholder="87654321" required="required" type="number" maxlength="8">
    </div>
</div>  
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('nombre') }}" id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nombre" placeholder="Juan Carlos Perez Luna" required="required" type="text" disabled>
    </div>
</div>    
<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Correo: <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input value="{{ old('correo') }}" type="email" id="email" name="correo" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" maxlength="9" placeholder='example@email.com'>
</div>
</div>
<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="contraseña">Contraseña: <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input value="{{ old('contraseña') }}" type="password" id="contraseña" name="contraseña" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
</div>
</div>

<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="contraseña">Repetir contraseña: <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input value="{{ old('contraseña') }}" type="password" id="contraseña" name="contraseña" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
</div>
</div>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="typeuser">Tipo de usuario: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
 
    <select value="{{ old('typeuser') }}" id="periodo" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="typeuser" placeholder="2019-I" required="required" type="text" maxlength="8">
  <option value="Director">Director</option> 
  <option value="Secretaria" >Secretaria</option>
  <option value="Alumno">Alumno</option>
</select>
    </div>
</div>  

<div class="ln_solid"></div>
<div class="form-group">
<div class="col-md-6 col-md-offset-3">
<a href="{{ route('users.index') }}"><button type="submit" class="btn btn-primary">Cancelar</button></a>
<a href="{{ route('users.index') }}"><button id="send" type="submit" class="btn btn-success">Guardar</button></a>
</div>
 </div>
</form>
</div>
</div>
</div>
</div>
</div>

@endsection 