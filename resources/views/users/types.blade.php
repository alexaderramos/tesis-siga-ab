@extends('layouts.gentelella')
@section('title') Agregar Tipo de Usuario @endsection

@section('content')	
	<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Agregar Tipo de Usuario <small></small></h2>
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

<span class="section">Datos del Usuario</span>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="DNI">Tipo de usuario: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('tipousuarionombre') }}" id="tipodeusuario" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="tipodeusuario" placeholder="" required="required" type="text" maxlength="8">
    </div>
</div>  
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Descripción: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <textarea value="{{ old('descripcion') }}" id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="descripcion" placeholder="Este usuario puede..." required="required" type="text"  rows="10" cols="40" ></textarea>
    </div>
</div>   

<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="permisos">Asignar Permisos: <span class="required">*</span>
</label>

<div class="col-md-6 col-sm-6 col-xs-12">
<div id="permisos" class="" data-toggle="">
<label >
<input  type="checkbox" name="permisos" value="0" data-parsley-multiple="permisos" > Gestionar usuarios
</label><br>
<label >
<input  type="checkbox" name="permisos" value="1" data-parsley-multiple="permisos" > Generar reportes
</label><br>
<label >
<input  type="checkbox" name="permisos" value="2" data-parsley-multiple="permisos" > Consultar notas
</label><br>
<label >
<input  type="checkbox" name="permisos" value="3" data-parsley-multiple="permisos" > Registrar pagos
</label><br>
</div>
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