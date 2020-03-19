@extends('layouts.gentelella')
@section('title')Registrar notas de alumnos @endsection

@section('content')

 <div class="page-title">
        <div class="title_left">
            <h3>Registrar notas de alumnos de 1º - "A"</h3>
           
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
<h2>Agregar notas<small></small></h2>
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
        
            <label style="Color:red;">(*) Las notas ingresadas tienen un plazo maximo de 7 dias de ser corregidas en caso de error.
                     
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
    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 50px; color:white;" aria-label="Apellidos: activate to sort column ascending">Practicas (30%)</th>
    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width:10px; color:white;" aria-label="Position: activate to sort column ascending">Examenes parciales (20%)</th>
    <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 10px; color:white;" aria-label="Office: activate to sort column ascending">Trabajos (10%)</th>
     <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width:10px; color:white;" aria-label="Position: activate to sort column ascending">Participación(15%)</th>
   
     <th class="sorting" tabindex="0" aria-controls="datatable-responsive" rowspan="1" colspan="1" style="width: 10px; color:white;" aria-label="Office: activate to sort column ascending">Examen Final(25%)</th>
        
</tr>
</thead>
<tbody>

<tr role="row" class="odd">


<td tabindex="0" class="sorting_1">71465913</td>

<td>Alejandro Benito Orihuela</td>
<td><input type="number" name="nota1" style="width: 80px; align-items: center;" ></td>
<td><input type="number" name="nota2" style="width: 80px; align-items: center;" ></td>
<td><input type="number" name="nota3" style="width: 80px; align-items: center;" ></td>
<td><input type="number" name="nota4" style="width: 80px; align-items: center;" ></td>
<td><input type="number" name="nota5" style="width: 80px; align-items: center;" ></td>


</tr>


<tr role="row" class="odd">


<td tabindex="0" class="sorting_1">71465914</td>

<td>Alex Orihuela</td>
<td><input type="number" name="nota1" style="width: 80px; align-items: center;" ></td>
<td><input type="number" name="nota2" style="width: 80px; align-items: center;" ></td>
<td><input type="number" name="nota3" style="width: 80px; align-items: center;" ></td>
<td><input type="number" name="nota4" style="width: 80px; align-items: center;" ></td>
<td><input type="number" name="nota5" style="width: 80px; align-items: center;" ></td>


</tr>
<tr role="row" class="odd">


<td tabindex="0" class="sorting_1">71465915</td>

<td>Alexander Benito </td>
<td><input type="number" name="nota1" style="width: 80px; align-items: center;" ></td>
<td><input type="number" name="nota2" style="width: 80px; align-items: center;" ></td>
<td><input type="number" name="nota3" style="width: 80px; align-items: center;" ></td>
<td><input type="number" name="nota4" style="width: 80px; align-items: center;" ></td>
<td><input type="number" name="nota5" style="width: 80px; align-items: center;" ></td>


</tr>
</tbody>
</table></div></div>
		<a href=""><button type="button" class="btn btn-success"  >Guardar Notas</button></a>
		



</div>
</div>
</div>
</div>

@endsection