@extends('layouts.gentelella')	
@section('title')  Registrar matrículas  @endsection
@section('content')
<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Registrar matrícula <small></small></h2>
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
<form class="form-horizontal form-label-left" novalidate=""  method="post" action="{{ route('matriculation.index') }}">

{{ csrf_field()  }}


<span class="section">Datos de la matrícula</span>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Period">Periodo Académico: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
 
    <select value="{{ old('Period') }}" id="Period" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="Period" placeholder="2019" required="required" type="text" maxlength="8">
  <option value="2019">2019</option> 
  <option value="2020"selected>2020</option>
  
</select>
    </div>
</div>  
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="CodMatriculation">Núm. de Matrícula: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('CodMatriculation') }}" id="CodMatriculation" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="CodMatriculation" placeholder="MAT0001" required="required" type="text"  >
    </div>
</div>    

<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="MatriculationDate">Fecha de matrícula: <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input type="date" value="{{ old('MatriculationDate') }}" id="MatriculationDate" name="MatriculationDate" required="required"  class="form-control col-md-7 col-xs-12">
</div>
</div>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="CodStudent">Alumno: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('CodStudent') }}" id="CodStudent" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="CodStudent" placeholder="Buscar por apellido" required="required" type="text">
    </div>
</div>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="DNIParents">Apoderado: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('DNIParents') }}" id="DNIParents" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="DNIParents" placeholder="Buscar por apellido" required="required" type="text">
    </div>
</div>

<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="CodGrade">Grado: <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<select value="{{ old('CodGrade') }}" type="number" id="CodGrade" name="CodGrade" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" maxlength="9" placeholder=" 1º " >

 <option value="GR01">1º</option> 
  <option value="GR02" selected>2º</option>
  <option value="GR03">3º</option>
    <option value="GR04">4º</option>
      <option value="GR05">5º</option>
</select>
</div>
</div>

<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="CodSection">Sección: <span class="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">

<select value="{{ old('CodSection') }}"  id="CodSection" name="CodSection" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" maxlength="9">
  <option value="SC1">A</option> 
  <option value="SC2" selected>B</option>
  <option value="SC3">C</option>
</select>
</div>
</div>

<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="vacantes">Vacantes: <span Vacantesclass="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input value="20" type="number" id="vacantes" name="vacantes" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12" placeholder="20"    disabled >
</div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ExSchool">Colegio de procedencia: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('ExSchool') }}" id="ExSchool" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ExSchool" placeholder="San vicente de paul" required="required" type="text">
    </div>
</div>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="AditionalInfo">Observaciones: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <textarea value="{{ old('AditionalInfo') }}" id="AditionalInfo" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="AditionalInfo" placeholder="El alumno tiene..." required="required" type="text"  rows="5" cols="40" ></textarea>
    </div>
</div>   
<div class="ln_solid"></div>
<div class="form-group">
<div class="col-md-6 col-md-offset-3">
<a href="{{ route('matriculation.index') }}"><button type="submit" class="btn btn-primary">Cancelar</button></a>
<a href="{{ route('matriculation.index') }}"><button id="send" type="submit" class="btn btn-success">Registrar</button></a>
</div>
 </div>
</form>
</div>
</div>
</div>
</div>
</div>


@endsection