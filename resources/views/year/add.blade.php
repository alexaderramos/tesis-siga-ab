@extends('layouts.gentelella')	
@section('title') Crear año lectivo @endsection

@section('content')
<div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Crear año lectivo <small></small></h2>
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
<form class="form-horizontal form-label-left" novalidate="" method="post" action="{{ route('year.index') }}">

{{ csrf_field()  }}

<span class="section">Datos del nuevo año</span>

  <div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="Year">Año: <span Vacantesclass="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input value="{{ old('Year') }}" type="number" id="Year" name="Year" required="required" class="form-control col-md-7 col-xs-12" placeholder="2019" >
</div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Weeks">Duración(en semanas): <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('Weeks') }}" id="Weeks" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="Weeks" placeholder="40" required="required" type="text">
    </div>
</div>





<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Description">Descripción: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <textarea value="{{ old('Description') }}" id="Description" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="Description" placeholder="Ingrese descripción" required="required" type="text"  rows="5" cols="40" ></textarea>
    </div>
</div>   
<div class="ln_solid"></div>
<div class="form-group">
<div class="col-md-6 col-md-offset-3">
<a href="{{ route('year.index') }}"><button type="submit" class="btn btn-primary">Cancelar</button></a>
<a href="{{ route('year.index') }}"><button id="send" type="submit" class="btn btn-success">Registrar</button></a>
</div>
 </div>
</form>
</div>
</div>
</div>
</div>
</div>



@endsection