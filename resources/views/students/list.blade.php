@extends('layouts.gentelella')
@section('title')Reporte de Alumnos @endsection

@section('content')

	
		<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Reporte de Alumnos</h3>
      
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

<div class="x_content">
<div class="col-md-12 col-sm-12 col-xs-12">
<div class="x_panel">
<div class="x_title">
<h2>Alumnos registrados<small></small></h2>
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
    <div class="col-sm-6">
        <div class="dataTables_length" id="datatable-responsive_length">
            <label>Mostrar Alumnos de  <select name="datatable-responsive_length" aria-controls="datatable-responsive" class="form-control input-sm">
                <option value="1">1°</option>
                <option value="2">2°</option>
                <option value="3">3°</option>
                <option value="4">4°</option>
				<option value="5">5°</option>
            </select> Año </label>
        </div>
    </div>
    <div class="col-sm-6"><div id="datatable-responsive_filter" class="dataTables_filter">
        <label>Buscar:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-responsive"></label>
    </div>
</div>
</div>
<div class="row">
    <div class="col-sm-12">
        <table id="datatable-responsive" class="table table-striped jambo_table bulk_action" cellspacing="0" width="100%" role="grid" aria-describedby="datatable-responsive_info" style="width: 100%;">
<thead>
<tr role="row">
	
      <th  tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 40px;" aria-sort="ascending" ><input type="checkbox" id="check-all" class="flat" style="position: absolute; opacity: 0;"></th>

     <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 40px; color:white;" aria-sort="ascending" aria-label="DNI: activate to sort column descending">DNI</th>
    <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 50px; color:white;" aria-sort="ascending" aria-label="Nombres: activate to sort column descending">Nombre</th>
    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 50px; color:white;" aria-label="Apellidos: activate to sort column ascending">Grado</th>
    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width:10px; color:white;" aria-label="Position: activate to sort column ascending">sección</th>
    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 10px; color:white;" aria-label="Office: activate to sort column ascending">Edad</th>
      <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 10px; color:white;" aria-label="Office: activate to sort column ascending">Alergias</th>
    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 10px; color:white;" aria-label="Office: activate to sort column ascending">Tipo de Sangre</th>
</tr>

</thead>
<tbody>

<tr role="row" class="odd">
<td><input type="checkbox" class="flat" name="table_records" style="position: absolute; opacity: 0;"></td>

<td tabindex="0" class="sorting_1">71465913</td>

<td>Alejandro Benito Orihuela</td>
<td>5°</td>
<td>A</td>
<td>17 Años</td>
<td>NInguna</td>
<td>A+</td>
</tr>

<tr role="row" class="odd">
<td><input type="checkbox" class="flat" name="table_records" style="position: absolute; opacity: 0;"></td>

<td tabindex="0" class="sorting_1">71465915</td>

<td>Mauro Orihuela</td>
<td>5°</td>
<td>A</td>
<td>15 Años</td>
<td>Penicilina</td>
<td>AB+</td>
</tr>
<tr role="row" class="odd">
<td><input type="checkbox" class="flat" name="table_records" style="position: absolute; opacity: 0;"></td>

<td tabindex="0" class="sorting_1">71465911</td>

<td>Alex Benies</td>
<td>5°</td>
<td>A</td>
<td>16 Años</td>
<td>Penicilina</td>
<td>O+</td>
</tr>

</tbody>
</table></div></div>
<div class="col-sm-7">
		<a href=""><button type="button" class="btn btn-info"  >Descargar Zip</button></a>
      <a href=""><button type="button" class="btn btn-primary"  >Descargar Word</button></a>
      <a href=""><button type="button" class="btn btn-danger"  >Descargar PDF</button></a>


 </div>
     
    
</div>
</div>
</div>
</div>
</div>
</div></div>

@endsection