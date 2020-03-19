@extends('layouts.gentelella')
@section('title')Registrar alumno @endsection

@section('content')
	
<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Registrar alumno<small></small></h2>
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
<form class="form-horizontal form-label-left" novalidate=""  action="{{ route('students.index') }}">

{{ csrf_field()  }}

<span class="section">Datos del alumno</span>
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
    <input value="{{ old('nombres') }}" id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nombres" placeholder="Juan Carlos" required="required" type="text" disabled>
    </div>
</div>    
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="AppPat">Apellido Paterno: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('AppPat') }}" id="AppPat" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="AppPat" placeholder="Peréz" required="required" type="text" disabled>
    </div>
</div>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="AppMat">Apellido Materno: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('AppMat') }}" id="AppMat" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="AppMat" placeholder="Luna" required="required" type="text" disabled>
    </div>
</div>


<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="AppPat">DNI Padre: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('AppPat') }}" id="AppPat" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="AppPat" placeholder="76543218" required="required" type="text" >
    </div>
</div>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="AppMat">Nombre del Padre: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('AppMat') }}" id="AppMat" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="AppMat" placeholder="Juan Perez Luna" required="required" type="text" disabled>
    </div>
</div>


<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="AppPat">DNI Madre: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('AppPat') }}" id="AppPat" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="AppPat" placeholder="76543218" required="required" type="text" >
    </div>
</div>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="AppMat">Nombre de la Madre: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('AppMat') }}" id="AppMat" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="AppMat" placeholder="Maria Luna Soliz" required="required" type="text" disabled>
    </div>
</div>
<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Tipo de Sangre: <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input value="{{ old('TipoSangre') }}" type="url" id="website" name="TipoSangre" required="required" placeholder="A+ " class="form-control col-md-7 col-xs-12">
</div>
</div>

<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Alergias: <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<textarea value="{{ old('direccion') }}" type="url" id="website" name="alergias" required="required"   rows="10" cols="40" class="form-control col-md-7 col-xs-12">	</textarea>
</div>
</div>


<div class="ln_solid"></div>
<div class="form-group">
<div class="col-md-6 col-md-offset-3">
<a href="{{ route('students.index') }}"><button type="submit" class="btn btn-primary">Cancelar</button></a>
<a href="{{ route('students.index') }}"><button id="send" type="submit" class="btn btn-success">Guardar</button></a>
</div>
 </div>
</form>
</div>
</div>
</div>
</div>
</div>

@endsection