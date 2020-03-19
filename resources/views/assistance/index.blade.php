@extends('layouts.gentelella')

@section('title') Asistencias @endsection

@section('content')


 <div class="page-title">
        <div class="title_left">
            <h3>Registrar asistencia de alumnos</h3>
           
        </div>
    <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Buscar por DNI...">
        <span class="input-group-btn">
        <button class="btn btn-default" type="button">Buscar!</button>
        </span>
    </div>

    </div>
    </div>
</div>

<div class="">
<div class="page-title">
<div class="title_left">

</div>

<div class="clearfix"></div>
</div>
<div class="x_content">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2>Historial de asistencias por alumno<small></small></h2>
<ul class="nav navbar-right panel_toolbox">
<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
</li>

<li><a class="close-link"><i class="fa fa-close"></i></a>
</li>
</ul>
<div class="clearfix"></div>
</div>
<div class="x_content">

<div id="datatable-responsive_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer"><div class="row">
    <div >
             
            <label>  Selecciona el nivel  &nbsp;&nbsp;  <select name="datatable-responsive_length" aria-controls="datatable-responsive" class="form-control input-sm">
                <option value="Inicial">Inicial</option>
                <option value="Primaria">Primaria</option>
                <option value="Secundaria">Secundaria</option>
              
            </select> &nbsp;  &nbsp; alumnos de  &nbsp;&nbsp;  <select name="datatable-responsive_length" aria-controls="datatable-responsive" class="form-control input-sm">
                <option value="1°">1°</option>
                <option value="2°">2°</option>
                <option value="3°">3°</option>
                <option value="4°">4°</option>
                <option value="5°">5°</option>
            </select> Año&nbsp;
               Sección&nbsp; <select name="datatable-responsive_length" aria-controls="datatable-responsive" class="form-control input-sm">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select> &nbsp; 
                    &nbsp;&nbsp;
                     <a href="{{ route('assistance.grades') }}"><button type="button" class="btn btn-success"  >Agregar Asistencia</button></a>
        </label> <br>
        <label>O por Excel(Plantilla mensual) &nbsp;&nbsp;
            <a href="{{ route('assistance.excel') }} "><button type="button" class="btn btn-success"  >Asistencia por Excel &nbsp;&nbsp;</button></a>
        </label>
        </div>
    </div>
    <div class="col-sm-6">
</div>
</div>
<div class="row">
    <div class="col-sm-12">
           <table id="datatable-responsive" class="table table-striped jambo_table bulk_action" cellspacing="0" width="100%" role="grid" aria-describedby="datatable-responsive_info" style="width: 100%;">
<thead>
<tr role="row">
	

     <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 40px; color:white;" aria-sort="ascending" aria-label="DNI: activate to sort column descending">DNI</th>
    <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 50px; color:white;" aria-sort="ascending" aria-label="Nombres: activate to sort column descending">Nombre</th>
    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 50px; color:white;" aria-label="Apellidos: activate to sort column ascending">Grado</th>
    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width:10px; color:white;" aria-label="Position: activate to sort column ascending">sección</th>
    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 10px; color:white;" aria-label="Office: activate to sort column ascending">Edad</th>
    
     <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 10px; color:white;" aria-label="Office: activate to sort column ascending">Acciones</th>
        
</tr>
</thead>
<tbody>

<tr role="row" class="odd">

<td tabindex="0" class="sorting_1">71465913</td>

<td>Alejandro Benito Orihuela</td>
<td>5°</td>
<td>A</td>
<td>17 Años</td>

<td>
 
    <button type="button" class="btn btn-info" ><i class="fa fa-eye"  data-toggle="tooltip" title="Ver Asistencias" ></i></button>
</td>


</tr>
</tbody>
</table></div></div>
		
		
<div class="row"><div class="col-sm-5">
    <div class="dataTables_info" id="datatable-responsive_info" role="status" aria-live="polite">Mostrando 10 alumnos de 50 </div>
</div>
<div class="col-sm-7">
    <div class="dataTables_paginate paging_simple_numbers" id="datatable-responsive_paginate">
        <ul class="pagination">
            <li class="paginate_button previous disabled" id="datatable-responsive_previous">
                <a href="#" aria-controls="datatable-responsive" data-dt-idx="0" tabindex="0">Anterior</a></li>
                <li class="paginate_button active"><a href="#" aria-controls="datatable-responsive" data-dt-idx="1" tabindex="0">1</a></li>
                <li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="2" tabindex="0">2</a></li>
                <li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="3" tabindex="0">3</a></li>
                <li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="4" tabindex="0">4</a></li>
                <li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="5" tabindex="0">5</a></li>
                <li class="paginate_button "><a href="#" aria-controls="datatable-responsive" data-dt-idx="6" tabindex="0">6</a></li>
                <li class="paginate_button next" id="datatable-responsive_next"><a href="#" aria-controls="datatable-responsive" data-dt-idx="7" tabindex="0">Siguiente</a></li></ul>
            </div>
        </div>
    </div>


</div>
</div>
</div>
</div>

@endsection