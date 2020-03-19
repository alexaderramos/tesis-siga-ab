@extends('layouts.gentelella')
@section('title')Agregar Criterio @endsection

@section('content')

<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Agregar Criterio<small></small></h2>
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
<form class="form-horizontal form-label-left" novalidate=""  action="{{ route('scores.add') }}">

{{ csrf_field()  }}

<span class="section">Datos del criterio</span>
  
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nombre: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('nombre') }}" id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nombre" placeholder="Primer exámen" required="required" type="text" >
    </div>
</div>    
<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="porcentaje">Procentaje: <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input value="{{ old('porcentaje') }}" type="number" id="porcentaje" name="porcentaje" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" maxlength="9" placeholder='25 %'>
</div>
</div>
<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nivel">Nivel: <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input value="{{ old('nivel') }}" type="text" id="nivel" name="nivel" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
</div>
</div>

<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="contraseña">Descripción: <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
 <textarea  rows="7" value="{{ old('descripcion') }}" type="date" id="año" name="descripcion" required="required" class="form-control col-md-7 col-xs-12" placeholder="Ingrese descripción" > </textarea>
</div>
</div>


<div class="ln_solid"></div>
<div class="form-group">
<div class="col-md-6 col-md-offset-3">
<a href="{{ route('scores.add') }}"><button type="submit" class="btn btn-primary">Cancelar</button></a>
<a href="{{ route('scores.add') }}"><button id="send" type="submit" class="btn btn-success">Guardar</button></a>
</div>
 </div>
</form>
</div>
</div>
</div>
</div>
</div>

@endsection 