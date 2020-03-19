@extends('layouts.gentelella')	

@section('title')  Crear grados  @endsection

@section('content')
<div class="clearfix"></div> 
  <div class="page-title">
        


    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                   <h2>Crear grado   <small></small></h2>
                 
      
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
<form class="form-horizontal form-label-left" novalidate=""  action="{{ route('grades.index') }}" method="post">



{{ csrf_field()  }}

<span class="section">Datos del nuevo grado</span>

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Grade">Nombre del Grado: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
    <input value="{{ old('Grade') }}" id="Grade" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="Grade" placeholder="1°" required="required" type="text"  >
    </div>
</div>    

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Level">Nivel: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">


    <select  aria-controls="datatable-responsive" class="form-control input-sm"  value="{{ old('Level') }}"
name="Level">
                <option value="Inicial">Inicial</option>
                <option value="Primaria">Primaria</option>
                <option value="Secundaria">Secundaria</option>

            </select>
    </div>
</div>  

<div class="item form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Places">Vacantes disponibles: <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
  <input value="{{ old('Places') }}" id="Places" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="Places" placeholder="20" required="required" type="text"  >
</div>   
</div> 


<div class="ln_solid"></div>
<div class="form-group">
<div class="col-md-6 col-md-offset-3">
<a href="{{ route('grades.index') }}"><button type="submit" class="btn btn-primary">Cancelar</button></a>
<a href="{{ route('grades.index') }}"><button id="send" type="submit" class="btn btn-success">Registrar</button></a>
</div>
 </div>
</form>
</div>
</div>
</div>
</div>
</div>



@endsection