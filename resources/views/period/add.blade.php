@extends('layouts.gentelella')	
@section('title')Crear Periodo @endsection

@section('content')
<div class="clearfix"></div> 
  <div class="page-title">
        <div class="title_left">
            <h2>Crear Periodo <small></small></h2>
                     <a href="{{ route('period.type') }}"><button type="button" class="btn btn-success"  >Crear Tipo de Periodo</button></a>
        </div>
    <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
    <div class="input-group">
       
    </div>

    </div>
    </div>
</div>


    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                  
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
<form class="form-horizontal form-label-left" novalidate=""  action="{{ route('period.index') }}">

{{ csrf_field()  }}

<span class="section">Datos del nuevo periodo</span>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="PeriodName">Número del Periodo: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('PeriodName') }}" id="PeriodName" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="PeriodName" placeholder="1º" required="required" type="text"  >
    </div>
</div>    

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="YearPeriodId">Año: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    
    <select value="{{ old('YearPeriodId') }}"  name="YearPeriodId" aria-controls="datatable-responsive" class="form-control input-sm">
                <option value="AÑ2019">2019</option>
                <option value="AÑ2020">2020</option>
            
            </select>
    </div>
</div>
<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="excolegio">Tipo de periodo: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    
    <select value="{{ old('tipoperiodo') }}"  name="tipoperiodo" aria-controls="datatable-responsive" class="form-control input-sm">
                <option value="TP001">BIMESTRE</option>
                <option value="TP002">TRIMESTRE</option>
            
            </select>
    </div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="excolegio">Duración(en semanas): <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('excolegio') }}" id="excolegio" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="excolegio" placeholder="36" required="required" type="text">
    </div>
</div>


<div class="item form-group">
<label class="control-label col-md-3 col-sm-3 col-xs-12" for="año">Fecha inicio: <span Vacantesclass="required">*</span>
</label>
<div class="col-md-6 col-sm-6 col-xs-12">
<input value="{{ old('fechainicio') }}" type="date" id="año" name="fechainicio" required="required" class="form-control col-md-7 col-xs-12" placeholder="2019" >
</div>
</div>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Fecha fin: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
   <input value="{{ old('fechafin') }}" type="date" id="año" name="fechafin" required="required" class="form-control col-md-7 col-xs-12" placeholder="2019" >
</div>   
</div> 
<div class="ln_solid"></div>
<div class="form-group">
<div class="col-md-6 col-md-offset-3">
<a href="{{ route('period.index') }}"><button type="submit" class="btn btn-primary">Cancelar</button></a>
<a href="{{ route('period.index') }}"><button id="send" type="submit" class="btn btn-success">Registrar</button></a>
</div>
 </div>
</form>
</div>
</div>
</div>
</div>
</div>





@endsection