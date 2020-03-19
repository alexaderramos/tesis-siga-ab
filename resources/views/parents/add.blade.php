@extends('layouts.gentelella')	
@section('title')  Registrar padres  @endsection

@section('content')
<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Registrar Personas <small></small></h2>
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
<form class="form-horizontal form-label-left" novalidate=""  action="{{ route('parents.index') }}">

{{ csrf_field()  }}

<span class="section">Datos del Persona</span>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="DNI">DNI: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('dni') }}" id="DNI" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="dni" placeholder="87654321" required="required" type="number" maxlength="8">
    </div>
</div>  
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombres: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('nombres') }}" id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nombres" placeholder="Juan Carlos" required="required" type="text">
    </div>
</div>    
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="AppPat">Apellido Paterno: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('AppPat') }}" id="AppPat" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="AppPat" placeholder="Peréz" required="required" type="text">
    </div>
</div>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="AppMat">Apellido Materno: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('AppMat') }}" id="AppMat" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="AppMat" placeholder="Luna" required="required" type="text">
    </div>
</div>
<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12">Genero:</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<div id="gender" class="btn-group" data-toggle="buttons">
<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
<input  type="radio" name="genero" value="0" data-parsley-multiple="gender" data-parsley-id="12"> &nbsp; Masculino &nbsp;
</label>
<label class="btn btn-primary active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
<input  type="radio" name="genero" value="1" data-parsley-multiple="gender"> Femenino
</label>
</div>
</div>
</div>
<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Dirección: <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input value="{{ old('direccion') }}" type="url" id="website" name="direccion" required="required" placeholder="Av. siempre viva 123" class="form-control col-md-7 col-xs-12">
</div>
</div>

<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Número de teléfono: <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input value="{{ old('numero') }}" type="number" id="number" name="numero" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" maxlength="9" placeholder="987 654 321" >
</div>
</div>
<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="FechaNacimiento">Fecha de Nacimiento: <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input type="date" value="{{ old('fecha') }}" id="FechaNacimiento" name="FechaNacimiento" required="required"  class="form-control col-md-7 col-xs-12">
</div>
</div>

<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="Profesion">Profesión: <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input value="{{ old('Profesion') }}" type="text" id="Profesion" name="Profesion" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" maxlength="9" placeholder="Ingeniero de sistemas" >
</div>
</div>


<div class="ln_solid"></div>
<div class="form-group">
<div class="col-md-6 col-md-offset-3">
<a href="{{ route('parents.index') }}"><button type="submit" class="btn btn-primary">Cancelar</button></a>
<a href="{{ route('parents.index') }}"><button id="send" type="submit" class="btn btn-success">Guardar</button></a>
</div>
 </div>
</form>
</div>
</div>
</div>
</div>
</div>


@endsection