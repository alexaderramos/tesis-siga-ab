@extends('layouts.gentelella')
@section('title')  Gestionar horarios  @endsection
@section('content')
	
<div class="">
    <div class="page-title">
        <div class="title_left">
            <h3>Gestionar Horarios</h3>
           
        </div>
    <div class="title_right">
    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
    <div class="input-group">
     
    
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
<h2>Lista de Grados<small></small></h2>
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
    <div class="col-sm-20">
        <div class="dataTables_length" id="datatable-responsive_length">
            <label>Seleccionar Nivel    <select name="datatable-responsive_length" aria-controls="datatable-responsive" class="form-control input-sm">
                     <option value="Inicial">Inicial</option>
                <option value="Primaria">Primaria</option>
                <option value="Secundaria">Secundaria</option>
          </select> y grado <select name="datatable-responsive_length" aria-controls="datatable-responsive" class="form-control input-sm">
                <option value="1°">1°</option>
                <option value="2°">2°</option>
                <option value="3°">3°</option>
                <option value="4°">4°</option>
                <option value="5°">5°</option>
            </select> </label>

       
        </div>
    </div>
    <div class="col-sm-6">
    	<div id="datatable-responsive_filter" class="dataTables_filter">
        {{-- <label>Buscar:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable-responsive"></label> --}}
    </div>
</div></div>
<div class="row">
    <div class="col-sm-12">
           <table id="datatable-responsive" class="table table-striped jambo_table bulk_action" cellspacing="0" width="100%" role="grid" aria-describedby="datatable-responsive_info" style="width: 100%;">
<thead>
<tr role="row">
	
        
    <th class="sorting_asc" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 50px; color:white;" aria-sort="ascending" aria-label="Nombres: activate to sort column descending">Horas</th>
    
   <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 50px; color:white;" aria-label="Apellidos: activate to sort column ascending">Lunes</th>
  

    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 10px; color:white;" aria-label="Office: activate to sort column ascending">Martes</th>
 
     <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 10px; color:white;" aria-label="Office: activate to sort column ascending">Miércoles</th>

        <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 10px; color:white;" aria-label="Office: activate to sort column ascending">Jueves</th>
          <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 10px; color:white;" aria-label="Office: activate to sort column ascending">Viernes</th>
</tr>
</thead>
<tbody>

<tr role="row" class="odd">

<td> 7:00 am - <br>8:30 am </td>

<td><button type="button" class="btn btn-primary" ><i class="fa fa-plus"  data-toggle="tooltip" title="Agregar Curso" ></i></button></td>

<td> <button type="button" class="btn btn-primary" ><i class="fa fa-plus"  data-toggle="tooltip" title="Agregar Curso" ></i></button></td>	


<td><button type="button" class="btn btn-primary" ><i class="fa fa-plus"  data-toggle="tooltip" title="Agregar Curso" ></i></button></td>
<td><button type="button" class="btn btn-primary" ><i class="fa fa-plus"  data-toggle="tooltip" title="Agregar Curso" ></i></button> </td>
<td><button type="button" class="btn btn-primary" ><i class="fa fa-plus"  plusdata-toggle="tooltip" title="Agregar Curso" ></i></button> </td>	

<tr role="row" class="odd">

<td> 8:30 am - <br>10:00 am </td>

<td><button type="button" class="btn btn-primary" ><i class="fa fa-plus"  data-toggle="tooltip" title="Agregar Curso" ></i></button></td>

<td> <button type="button" class="btn btn-primary" ><i class="fa fa-plus"  data-toggle="tooltip" title="Agregar Curso" ></i></button></td>	


<td><button type="button" class="btn btn-primary" ><i class="fa fa-plus"  data-toggle="tooltip" title="Agregar Curso" ></i></button></td>
<td><button type="button" class="btn btn-primary" ><i class="fa fa-plus"  data-toggle="tooltip" title="Agregar Curso" ></i></button> </td>
<td><button type="button" class="btn btn-primary" ><i class="fa fa-plus"  plusdata-toggle="tooltip" title="Agregar Curso" ></i></button> </td>
</tr>	

<tr role="row" class="odd">
<td> 10:00 am - <br>12:00 m </td>

<td><button type="button" class="btn btn-primary" ><i class="fa fa-plus"  data-toggle="tooltip" title="Agregar Curso" ></i></button></td>

<td> <button type="button" class="btn btn-primary" ><i class="fa fa-plus"  data-toggle="tooltip" title="Agregar Curso" ></i></button></td>	


<td><button type="button" class="btn btn-primary" ><i class="fa fa-plus"  data-toggle="tooltip" title="Agregar Curso" ></i></button></td>
<td><button type="button" class="btn btn-primary" ><i class="fa fa-plus"  data-toggle="tooltip" title="Agregar Curso" ></i></button> </td>
<td><button type="button" class="btn btn-primary" ><i class="fa fa-plus"  plusdata-toggle="tooltip" title="Agregar Curso" ></i></button> </td>	
</tr>

<tr role="row" class="odd">
<td> 12:00 m- <br>2:00 pm </td>

<td><button type="button" class="btn btn-primary" ><i class="fa fa-plus"  data-toggle="tooltip" title="Agregar Curso" ></i></button></td>

<td> <button type="button" class="btn btn-primary" ><i class="fa fa-plus"  data-toggle="tooltip" title="Agregar Curso" ></i></button></td>	


<td><button type="button" class="btn btn-primary" ><i class="fa fa-plus"  data-toggle="tooltip" title="Agregar Curso" ></i></button></td>
<td><button type="button" class="btn btn-primary" ><i class="fa fa-plus"  data-toggle="tooltip" title="Agregar Curso" ></i></button> </td>
<td><button type="button" class="btn btn-primary" ><i class="fa fa-plus"  plusdata-toggle="tooltip" title="Agregar Curso" ></i></button> </td>			


</tr>
</tbody>
</table></div></div>
    
</div>
</div>
</div>
</div>
</div>
</div>
@endsection